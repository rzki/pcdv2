<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ReportBOD;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportSummaryBODController extends Controller
{
    public function indexBOD()
    {
        $reportBOD = ReportBOD::orderBy('tgl', 'asc')->get();

        return view('report-summary.report-bod', compact('reportBOD'));
    }

    public function importBOD (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.' Report BOD'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-summary/report-bod/excel', $customName);

        ReportBOD::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Report BOD Berhasil!', 'success');

        return to_route('bod_index')->with('file', $customName);
    }

    public function deleteBOD (ReportBOD $bod)
    {
        if(!empty($bod->filename)){
            unlink("storage/".$bod->path);
        };

        ReportBOD::destroy($bod->id);

        Alert::toast('Report BOD berhasil dihapus!', 'success');

        return to_route('bod_index');
    }

    public function downloadBOD (ReportBOD $bod)
    {
        return response()->download(storage_path("app/public/{$bod->path}"));
    }

    public function viewReportBOD(ReportBOD $bod)
    {
        $filename = $bod->filename;
        $path = storage_path("app/public/{$bod->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
