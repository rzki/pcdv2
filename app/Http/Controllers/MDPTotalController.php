<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\MonthlyTotal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MDPTotalController extends Controller
{
    public function indexMonthly()
    {
        if(request()->year_total){
            $yearResult     =  Carbon::parse(request()->year_total)->toDate();
            $totalHeader    =  Carbon::parse($yearResult)->format('Y');
            $monthlySAP     =  MonthlyTotal::whereYear('tgl', $yearResult)->get();
            $monthlyKAP     =  MonthlyTotal::whereYear('tgl', $yearResult)->get();
            $monthlyTotal   =  MonthlyTotal::whereYear('tgl', $yearResult)->get();
            $mdpTotal       =  MonthlyTotal::whereYear('tgl', $yearResult)->orderBy('tgl', 'asc')->get();
            $actualTotal    =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprTotal       =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastTotal  =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $actualSAP      =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprSAP         =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastSAP    =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $actualKAP      =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprKAP         =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastKAP    =  MonthlyTotal::whereYear('tgl', $yearResult)->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $accTotal       =  MonthlyTotal::whereYear('tgl', $yearResult)->sum('volume_total');
            $accTotal       =  intval($accTotal);
            $accSAP         =  MonthlyTotal::whereYear('tgl', $yearResult)->sum('volume_sap');
            $accSAP         =  intval($accSAP);
            $accKAP         =  MonthlyTotal::whereYear('tgl', $yearResult)->sum('volume_kap');
            $accKAP         =  intval($accKAP);

        }else{
            $totalHeader    =  Carbon::now()->isoFormat('Y');
            $monthlySAP     =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->get();
            $monthlyKAP     =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->get();
            $monthlyTotal   =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->get();
            $mdpTotal       =  MonthlyTotal::whereYear('tgl', Carbon::now())->orderBy('tgl', 'asc')->get();
            $actualTotal    =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprTotal       =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastTotal  =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $actualSAP      =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprSAP         =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastSAP    =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $actualKAP      =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Actual')->orderBy('tgl', 'asc')->get();
            $oprKAP         =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'OPR')->orderBy('tgl', 'asc')->get();
            $forecastKAP    =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->where('status', '=', 'Forecast')->orderBy('tgl', 'asc')->get();
            $accTotal       =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->sum('volume_total');
            $accTotal       =  intval($accTotal);
            $accSAP         =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->sum('volume_sap');
            $accSAP         =  intval($accSAP);
            $accKAP         =  MonthlyTotal::whereYear('tgl', '=', Carbon::now())->sum('volume_kap');
            $accKAP         =  intval($accKAP);
        }

        if($mdpTotal->isEmpty()){
            $labelTotal[]    = "Data Tidak Ditemukan";
            $volumeTotal[]   = [];
        }else{
            foreach($mdpTotal as $total){
                $labelTotal[]    = Carbon::parse($total->tgl)->format('F');
                $volumeTotal[]   = $total->volume_total;
            }
        };

        if($monthlySAP->isEmpty()){
            $labelSAP[]    = "Data Tidak Ditemukan";
            $volumeSAP[]   = [];
        }else{
            foreach($monthlySAP as $sap){
                $labelSAP[]    = Carbon::parse($sap->tgl)->format('F');
                $volumeSAP[]   = $sap->volume_sap;
            }
        };

        if($monthlyKAP->isEmpty()){
            $labelKAP[]    = "Data Tidak Ditemukan";
            $volumeKAP[]   = [];
        }else{
            foreach($monthlyKAP as $kap){
                $labelKAP[]    = Carbon::parse($kap->tgl)->format('F');
                $volumeKAP[]   = $kap->volume_kap;
            }
        };

        return view('monthly-mdp.index', compact('monthlySAP', 'labelSAP', 'volumeSAP','monthlyKAP', 'labelKAP', 'volumeKAP','monthlyTotal', 'totalHeader', 'mdpTotal', 'labelTotal', 'volumeTotal', 'accTotal', 'accSAP', 'accKAP'));
    }

    public function detailVolumeTotal()
    {
        if(request()->year){
            $yearResult = Carbon::parse(request()->year)->toDateString();
            $yearHeader = Carbon::parse($yearResult)->format('Y');
            $yearlyTotal = MonthlyTotal::whereYear('tgl', '=', $yearResult)->get();
        }else{
            $yearHeader = Carbon::now()->format('Y');
            $yearlyTotal = MonthlyTotal::whereYear('tgl', '=', Carbon::now())->orderBy('tgl', 'asc')->get();
        };

        return view('monthly-mdp.total-volume.detail', compact('yearlyTotal', 'yearHeader', 'yearlyTotal'));
    }

    public function createVolumeTotal()
    {
        return view('monthly-mdp.total-volume.create-total');
    }

    public function storeTotal(Request $request)
    {
        $request->validate([
            'tgl' => 'required',
            'volume_total' => 'required',
            'volume_sap' => 'required',
            'volume_kap' => 'required',
            'status' => 'required'
        ]);

        $volume_total = str_replace('.', '', $request['volume_total']);
        $volume_sap = str_replace('.', '', $request['volume_sap']);
        $volume_kap = str_replace('.', '', $request['volume_kap']);

        MonthlyTotal::create([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'volume_total' => $volume_total,
            'volume_sap' => $volume_sap,
            'volume_kap' => $volume_kap,
            'status' => $request->status
        ]);

        Alert::toast('Data Volume Total berhasil ditambahkan!', 'success');

        return to_route('detail_volume_total');
    }

    public function editVolumeTotal(MonthlyTotal $total)
    {
        return view('monthly-mdp.total-volume.edit', compact('total'));
    }

    public function updateTotal(Request $request, MonthlyTotal $total)
    {
        $request->validate([
            'tgl' => 'required',
            'volume_total' => 'required',
            'volume_sap' => 'required',
            'volume_kap' => 'required',
            'status' => 'required'
        ]);

        $volume_total = str_replace('.', '', $request['volume_total']);
        $volume_sap = str_replace('.', '', $request['volume_sap']);
        $volume_kap = str_replace('.', '', $request['volume_kap']);

        MonthlyTotal::where('id', $total->id)->update([
            'tgl' => Carbon::parse($request->tgl)->toDateString(),
            'volume_total' => $volume_total,
            'volume_sap' => $volume_sap,
            'volume_kap' => $volume_kap,
            'status' => $request->status
        ]);

        Alert::toast('Data Volume Total berhasil diperbarui!', 'success');

        return to_route('detail_volume_total');
    }

    public function deleteTotal (MonthlyTotal $total)
    {
        MonthlyTotal::destroy($total->id);

        Alert::toast('Volume Total berhasil dihapus!', 'success');

        return to_route('detail_volume_total');
    }

}
