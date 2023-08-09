<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\ReportEOM;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportSummaryEOMController extends Controller
{
    public function indexEOM()
    {
        $reportEOM = ReportEOM::orderBy('tgl', 'asc')->get();

        return view('report-summary.report-eom', compact('reportEOM'));
    }

    public function importEOM (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.' Report End Of Month'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-summary/report-eom', $customName);

        $report= ReportEOM::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Report Akhir Bulan Berhasil!', 'success');

        return to_route('eom_index')->with('file', $customName);
        // return $report;
    }

    public function deleteEOM (ReportEOM $eom)
    {
        if(!empty($eom->filename)){
            unlink("storage/".$eom->path);
        };

        ReportEOM::destroy($eom->id);

        Alert::toast('Report Akhir Bulan berhasil dihapus!', 'success');

        return to_route('eom_index');
    }

    public function downloadEOM (ReportEOM $eom)
    {
        return response()->download(storage_path("app/public/{$eom->path}"));
    }

    public function viewReportEOM(ReportEOM $eom)
    {
        $filename = $eom->filename;
        $path = storage_path("app/public/{$eom->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
