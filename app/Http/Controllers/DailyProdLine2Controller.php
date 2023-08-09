<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Imports\DailyL2Import;
use App\Models\DailyProduction2;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DailyProdLine2Controller extends Controller
{
    public function index2()
    {
        if(request()->month) {
            $month = Carbon::parse(request()->month)->format('m-Y');
            $monthHead = Carbon::parse(request()->month)->isoFormat('MMMM Y');
        } else {
            $monthHead = Carbon::now()->format('F Y');
            $month = Carbon::now()->format('m-Y');
        };

        $line2 = DailyProduction2::whereMonth('tgl', $month)->where('line', '=', '2')->get();
        $line2Chart = DailyProduction2::whereMonth('tgl', $month)->where('line', '=', '2')->get();


        if($line2Chart->isEmpty()){
            $labelL2[] = "Data Tidak Ditemukan";
            $planL2 = $actualL2 = $plusMinusL2 = [];
        }else{
            foreach($line2Chart as $l2){
                $labelL2[] = Carbon::parse($l2->tgl)->format('j');
                $planL2[] = $l2->plan;
                $actualL2[] = $l2->actual;
                $plusMinusL2[] = $l2->plus_minus;
            }
        };

        return view('daily-plan.line-2.index', compact('line2', 'monthHead', 'labelL2', 'planL2', 'actualL2', 'plusMinusL2'));
    }

    public function create2 ()
    {
        return view('daily-plan.line-2.create');
    }

    public function edit2(DailyProduction2 $line2)
    {
        return view('daily-plan.line-2.edit', compact('line2'));
    }

    public function update2(Request $request, DailyProduction2 $line2)
    {
        DailyProduction2::where('id', $line2->id)->update([
            'tgl' => $request->tgl,
            'plan' => $request->plan,
            'actual' => $request->actual,
            'plus_minus' => $request->actual - $request->plan,
            'line' => '2'
        ]);

        Alert::toast('Data Daily Production berhasil diperbarui!', 'success');


        return to_route('index_l2');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'plan' => 'required',
        ]);

        DailyProduction2::create([
            'tgl' => $request->tgl,
            'plan' => $request->plan,
            'actual' => $request->actual,
            'plus_minus' => $request->actual - $request->plan,
            'line' => '2'
        ]);

        Alert::toast('Data Daily Production Line #2 Berhasil Ditambahkan!', 'success');

        return to_route('index_l2');
    }
    public function import2 (Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DailyL2Import, $request->file('file'));

        Alert::toast('Data Daily Production Line #2 Berhasil Diimport!', 'success');

        return redirect()->back();
    }

    public function destroy2 (DailyProduction2 $line2)
    {
        DailyProduction2::destroy($line2->id);

        Alert::toast('Data DPR Line 2 berhasil dihapus!', 'success');

        return to_route('index_l2');
    }

}
