<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Report1977;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportSummaryAchievement1977Controller extends Controller
{
    public function index1977()
    {
        $report1977 = Report1977::orderBy('tgl', 'asc')->get();

        return view('report-summary.report-1977', compact('report1977'));
    }

    public function import1977 (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.' Report Achievement Delivery 1977'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-summary/report-1977', $customName);

        Report1977::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Report Achievement Delivery 1977 Berhasil!', 'success');

        return to_route('index_1977')->with('file', $customName);
    }

    public function delete1977(Report1977 $report1977)
    {
        if(!empty($report1977->filename)){
            unlink("storage/".$report1977->path);
        };

        Report1977::destroy($report1977->id);

        Alert::toast('Report Achievement Delivery 1977 berhasil dihapus!', 'success');

        return to_route('index_1977');
    }

    public function download1977(Report1977 $report1977)
    {
        return response()->download(storage_path("app/public/{$report1977->path}"));
    }

    public function viewReport1977(Report1977 $report1977)
    {
        $filename = $report1977->filename;
        $path = storage_path("app/public/{$report1977->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
