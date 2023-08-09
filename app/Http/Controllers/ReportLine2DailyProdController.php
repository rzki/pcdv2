<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L2DailyProdFile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine2DailyProdController extends Controller
{
    public function indexDaily()
    {
        $dailyL2 = L2DailyProdFile::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-2.daily_prod', compact('dailyL2'));
    }

    public function importDaily(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlsx,xls,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Daily Prod Report Line #2'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('file/report-line-2/daily-prod/excel', $customName);


        L2DailyProdFile::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Daily Report Line #2 Berhasil!', 'success');

        return to_route('index_daily2')->with('file', $customName);
    }

    public function deleteDaily2(L2DailyProdFile $dailyl2)
    {
        if(!empty($dailyl2->filename)){
            unlink("storage/".$dailyl2->path);
        };

        L2DailyProdFile::destroy($dailyl2->id);

        Alert::toast('Daily Report Line #2 berhasil dihapus!', 'success');

        return to_route('index_daily2');
    }

    public function downloadDaily2(L2DailyProdFile $dailyl2)
    {
        return response()->download(storage_path("app/public/{$dailyl2->path}"));
    }

    public function viewDaily2(L2DailyProdFile $dailyl2)
    {
        $filename = $dailyl2->filename;
        $path = storage_path("app/public/{$dailyl2->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
