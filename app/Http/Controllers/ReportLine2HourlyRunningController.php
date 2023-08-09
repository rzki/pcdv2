<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\L2HourlyRunning;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class ReportLine2HourlyRunningController extends Controller
{
    public function indexHourly()
    {
        $hourlyL2 = L2HourlyRunning::whereMonth('tgl', '=', Carbon::now())->get();

        return view('report-line-2.hourly_running', compact('hourlyL2'));
    }

    public function importHourly(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt,xlsx,xls,pdf|max:51200',
            ]);

        $date = Carbon::now()->format('Y-m-d');
        $extension = $request['file']->getClientOriginalExtension();

        $customName = uniqid().' -'.'Hourly Running Unit Report Line #2'.' '.'-'.' '.$date.'.'.$extension;

        $path = $request->file('file')->storeAs('file/report-line-2/hourly-running/excel', $customName);

        L2HourlyRunning::create([
            'filename' => $customName,
            'path' => $path,
            'tgl' => Carbon::now()->toDateString()
        ]);

        Alert::toast('Upload Hourly Running Unit Line #2 Berhasil!', 'success');

        return to_route('index_hourly2')->with('file', $customName);
    }

    public function deleteHourly2(L2HourlyRunning $hourlyl2)
    {
        if(!empty($hourlyl2->filename)){
            unlink("storage/".$hourlyl2->path);
        };

        L2HourlyRunning::destroy($hourlyl2->id);

        Alert::toast('Hourly Running Unit Line #2 berhasil dihapus!', 'success');

        return to_route('index_hourly2');
    }

    public function downloadHourly2(L2HourlyRunning $hourlyl2)
    {
        return response()->download(storage_path("app/public/{$hourlyl2->path}"));
    }

    public function viewHourly2(L2HourlyRunning $hourlyl2)
    {
        $filename = $hourlyl2->filename;
        $path = storage_path("app/public/{$hourlyl2->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
