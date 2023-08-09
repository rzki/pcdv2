<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L1DailyProdFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine1DailyProdController extends Controller
{
    public function indexDaily()
    {
        $dailyL1 = L1DailyProdFile::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-1.daily_prod', compact('dailyL1'));
    }

    public function importDaily(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Daily Prod Report Line #1'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-line-1/daily-prod/excel', $customName);

        L1DailyProdFile::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Daily Report Line #1 Berhasil!', 'success');

        return to_route('index_daily1')->with('file', $customName);
    }

    public function deleteReportDaily1(L1DailyProdFile $dailyl1)
    {
        if(!empty($dailyl1->filename)){
            unlink("storage/".$dailyl1->path);
        };

        L1DailyProdFile::destroy($dailyl1->id);

        Alert::toast('Daily Report Line #1 berhasil dihapus!', 'success');

        return to_route('index_daily1');
    }

    public function downloadDaily1(L1DailyProdFile $dailyl1)
    {
        return response()->download(storage_path("app/public/{$dailyl1->path}"));
    }

    public function viewDaily1(L1DailyProdFile $dailyl1)
    {
        $filename = $dailyl1->filename;
        $path = storage_path("app/public/{$dailyl1->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
