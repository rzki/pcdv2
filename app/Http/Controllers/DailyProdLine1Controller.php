<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Imports\DailyL1Import;
use App\Models\DailyProduction;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class DailyProdLine1Controller extends Controller
{
    public function index1()
    {
        if(request()->month){
            $month = Carbon::parse(request()->month)->format('m-Y');
            $monthHead = Carbon::parse(request()->month)->isoFormat('MMMM Y');
        } else {
            $monthHead = Carbon::now()->format('F Y');
            $month = Carbon::now()->format('m-Y');
        };

        $line1 = DailyProduction::whereMonth('tgl', $month)->where('line', '=', '1')->get();
        $line1Chart = $line1;

        if($line1Chart->isEmpty()) {
            $labelL1[] = "Data Tidak Ditemukan";
            $planL1 = $actualL1 = $plusMinusL1 = [];
        } else {
            foreach($line1Chart as $l1) {
                $labelL1[] = Carbon::parse($l1->tgl)->format('j');
                $planL1[] = $l1->plan;
                $actualL1[] = $l1->actual;
                $plusMinusL1[] = $l1->plus_minus;
            }
        };

        return view('daily-plan.line-1.index', compact('line1', 'monthHead', 'labelL1', 'planL1', 'actualL1', 'plusMinusL1'));
    }

    public function create1()
    {
        return view('daily-plan.line-1.create');
    }

    public function store1(Request $request)
    {
        $request->validate([
            'plan' => 'required',
        ]);

        DailyProduction::create([
            'tgl' => $request->tgl,
            'plan' => $request->plan,
            'actual' => $request->actual,
            'plus_minus' => $request->actual - $request->plan,
            'line' => '1'
        ]);

        Alert::toast('Data Daily Production Line #1 Berhasil Ditambahkan!', 'success');

        return to_route('index_l1');
    }

    public function edit1(DailyProduction $line1)
    {
        return view('daily-plan.line-1.edit', compact('line1'));
    }

    public function update1(Request $request, DailyProduction $line1)
    {
        DailyProduction::where('id', $line1->id)->update([
            'tgl' => $request->tgl,
            'plan' => $request->plan,
            'actual' => $request->actual,
            'plus_minus' => $request->actual - $request->plan,
            'line' => '1'
        ]);

        Alert::toast('Data Daily Production berhasil diperbarui!', 'success');

        return to_route('index_l1');
    }


    public function import1 (Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DailyL1Import, $request->file('file'));

        Alert::toast('Data Daily Production Line #1 Berhasil Diimport!', 'success');

        return redirect()->back();
    }

    public function destroy1 (DailyProduction $line1)
    {
        DailyProduction::destroy($line1->id);

        Alert::toast('Data DPR Line 1 berhasil dihapus!', 'success');

        return to_route('index_l1');
    }
}
