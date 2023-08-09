<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L1HourlyRunning;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine1HourlyRunningController extends Controller
{
    public function indexHourly()
    {
        $hourlyL1 = L1HourlyRunning::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-1.hourly_running', compact('hourlyL1'));
    }

    public function importHourly(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls,xlsm,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Hourly Running Unit Report Line #1'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('report-line-1/hourly-running/excel', $customName);

        L1HourlyRunning::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Hourly Running Line #1 Berhasil!', 'success');

        return to_route('index_hourly1')->with('file', $customName);
    }

    public function deleteHourly1(L1HourlyRunning $hourlyl1)
    {
        if(!empty($hourlyl1->filename)){
            unlink("storage/".$hourlyl1->path);
        };

        L1HourlyRunning::destroy($hourlyl1->id);

        Alert::toast('Hourly Running Line #1 berhasil dihapus!', 'success');

        return to_route('index_hourly1');
    }

    public function downloadHourly1(L1HourlyRunning $hourlyl1)
    {
        return response()->download(storage_path("app/public/{$hourlyl1->path}"));
    }

    public function viewHourly1(L1HourlyRunning $hourlyl1)
    {
        $filename = $hourlyl1->filename;
        $path = storage_path("app/public/{$hourlyl1->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
