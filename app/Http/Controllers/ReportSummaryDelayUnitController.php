<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ReportDelayUnit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportSummaryDelayUnitController extends Controller
{
    public function indexReportDelay()
    {
        $reportDelay = ReportDelayUnit::orderBy('tgl', 'asc')->get();

        return view('report-summary.report-delay', compact('reportDelay'));
    }

    public function importDelay (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.' Report Delay Unit'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-summary/delay-unit/excel', $customName);

        ReportDelayUnit::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Report Delay Unit Berhasil!', 'success');

        return to_route('report_delay_index')->with('file', $customName);
    }

    public function deleteDelay (ReportDelayUnit $delay)
    {
        if(!empty($delay->filename)){
            unlink("storage/".$delay->path);
        };

        ReportDelayUnit::destroy($delay->id);

        Alert::toast('Report Delay Unit berhasil dihapus!', 'success');

        return to_route('report_delay_index');
    }

    public function downloadDelay (ReportDelayUnit $delay)
    {
        return response()->download(storage_path("app/public/{$delay->path}"));
    }

    public function viewReportDelay(ReportDelayUnit $delay)
    {
        $filename = $delay->filename;
        $path = storage_path("app/public/{$delay->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
