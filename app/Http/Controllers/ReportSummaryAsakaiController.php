<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ReportAsakai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportSummaryAsakaiController extends Controller
{
    public function indexAsakai()
    {
        $reportAsakai = ReportAsakai::orderBy('tgl', 'asc')->get();

        return view('report-summary.report-asakai', compact('reportAsakai'));
    }

    public function importAsakai (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
        ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.' Report Asakai'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-summary/report-asakai/excel', $customName);

        ReportAsakai::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Report Asakai Berhasil!', 'success');

        return to_route('asakai_index')->with('file', $customName);
    }

    public function deleteAsakai (ReportAsakai $asakai)
    {
        if(!empty($asakai->filename)){
            unlink("storage/".$asakai->path);
        };

        ReportAsakai::destroy($asakai->id);

        Alert::toast('Report Asakai berhasil dihapus!', 'success');

        return to_route('asakai_index');
    }

    public function downloadAsakai (ReportAsakai $asakai)
    {
        return response()->download(storage_path("app/public/{$asakai->path}"));
    }

    public function viewReportAsakai(ReportAsakai $asakai)
    {
        $filename = $asakai->filename;
        $path = storage_path("app/public/{$asakai->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
