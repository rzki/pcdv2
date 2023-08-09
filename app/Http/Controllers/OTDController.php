<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\OTDKAP;
use App\Models\OTDSAP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class OTDController extends Controller
{
    public function indexOTD()
    {
        if(request()->month_all){
            $monthResult = Carbon::parse(request()->month_all)->format('m-Y');
            $monthSAPHeader = Carbon::parse(request()->month_all)->isoFormat('MMMM Y');
            $monthKAPHeader = Carbon::parse(request()->month_all)->isoFormat('MMMM Y');
            $OTDSAP = OTDSAP::whereMonth('tgl', $monthResult)->get();
            $OTDKAP = OTDKAP::whereMonth('tgl', $monthResult)->get();
            $planSAP = OTDSAP::whereMonth('tgl', $monthResult)->avg('plan_percent');
            $planSAP = round($planSAP, 1);
            $planKAP = OTDKAP::whereMonth('tgl', $monthResult)->avg('plan_percent');
            $planKAP = round($planKAP, 1);
            $otdSAP = OTDSAP::whereMonth('tgl', $monthResult)->avg('ot_percent');
            $otdSAP = round($otdSAP, 1);
            $otdKAP = OTDKAP::whereMonth('tgl', $monthResult)->avg('ot_percent');
            $otdKAP = round($otdKAP, 1);
            $delaySAP = OTDSAP::whereMonth('tgl', $monthResult)->avg('delay_percent');
            $delaySAP = round($delaySAP, 1);
            $delayKAP = OTDKAP::whereMonth('tgl', $monthResult)->avg('delay_percent');
            $delayKAP = round($delayKAP, 1);
        }else{
            $monthSAPHeader = Carbon::now()->isoFormat('MMMM Y');
            $monthKAPHeader = Carbon::now()->isoFormat('MMMM Y');
            $OTDSAP = OTDSAP::whereMonth('tgl', '=', Carbon::now())->get();
            $OTDKAP = OTDKAP::whereMonth('tgl', '=', Carbon::now())->get();
            $planSAP = OTDSAP::whereMonth('tgl', '=', Carbon::now())->avg('plan_percent');
            $planSAP = round($planSAP, 1);
            $planKAP = OTDKAP::whereMonth('tgl', '=', Carbon::now())->avg('plan_percent');
            $planKAP = round($planKAP, 1);
            $otdSAP = OTDSAP::whereMonth('tgl', '=', Carbon::now())->avg('ot_percent');
            $otdSAP = round($otdSAP, 1);
            $otdKAP = OTDKAP::whereMonth('tgl', '=', Carbon::now())->avg('ot_percent');
            $otdKAP = round($otdKAP, 1);
            $delaySAP = OTDSAP::whereMonth('tgl', '=', Carbon::now())->avg('delay_percent');
            $delaySAP = round($delaySAP, 1);
            $delayKAP = OTDKAP::whereMonth('tgl', '=', Carbon::now())->avg('delay_percent');
            $delayKAP = round($delayKAP, 1);
        }

        if($OTDSAP->isEmpty()){
            $labelsOTDSAP[]    = "Data Tidak Ditemukan";
            $planOTDSAP[]      =  [];
            $otAdvOTDSAP[]     =  [];
            $delayOTDSAP[]     =  [];
            $planPercentSAP[]  =  [];
            $otAdvPercentSAP[] =  [];
            $delayPercentSAP[] =  [];
        } else {
        foreach ($OTDSAP as $otd1){
                $labelsOTDSAP[]    = Carbon::parse($otd1->tgl)->format('j M');
                $planOTDSAP[]      = $otd1->plan;
                $otAdvOTDSAP[]     = $otd1->ot_adv;
                $delayOTDSAP[]     = $otd1->delay;
                $planPercentSAP[]  = $otd1->plan_percent;
                $otAdvPercentSAP[] = $otd1->ot_percent;
                $delayPercentSAP[] = $otd1->delay_percent;
            }
        };

        if($OTDKAP->isEmpty()){
            $labelsOTDKAP[]    = "Data Tidak Ditemukan";
            $planOTDKAP[]      =  [];
            $otAdvOTDKAP[]     =  [];
            $delayOTDKAP[]     =  [];
            $planPercentKAP[]  =  [];
            $otAdvPercentKAP[] =  [];
            $delayPercentKAP[] =  [];
        } else {
        foreach ($OTDKAP as $otd2){
                $labelsOTDKAP[]    = Carbon::parse($otd2->tgl)->format('j M');
                $planOTDKAP[]      = $otd2->plan;
                $otAdvOTDKAP[]     = $otd2->ot_adv;
                $delayOTDKAP[]     = $otd2->delay;
                $planPercentKAP[]  = $otd2->plan_percent;
                $otAdvPercentKAP[] = $otd2->ot_percent;
                $delayPercentKAP[] = $otd2->delay_percent;
            }
        };
        return view('otd.index', compact('OTDSAP', 'OTDKAP', 'labelsOTDSAP','planOTDSAP','otAdvOTDSAP','delayOTDSAP','planPercentSAP', 'otAdvPercentSAP', 'delayPercentSAP','labelsOTDKAP','planOTDKAP','otAdvOTDKAP','delayOTDKAP','planPercentKAP','otAdvPercentKAP', 'delayPercentKAP', 'monthSAPHeader', 'monthKAPHeader', 'planSAP', 'planKAP', 'otdSAP', 'otdKAP', 'delaySAP', 'delayKAP'));
    }

    public function indexSAP()
    {
        if(request()->sap_month){
            $month = Carbon::parse(request()->sap_month)->format('m-Y');
            $monthHeader = Carbon::parse(request()->sap_month)->isoFormat('MMMM Y');
            $detailOTDSAP = OTDSAP::whereMonth('tgl', $month)->where('plant', '=', 'sap')->get();
        }else{
            $monthHeader = Carbon::now()->isoFormat('MMMM Y');;
            $detailOTDSAP = OTDSAP::whereMonth('tgl', '=', Carbon::now())->where('plant', '=', 'sap')->get();
        }

        if($detailOTDSAP->isEmpty()){
            $labelsOTDSAP[]    = "Data Tidak Ditemukan";
            $planOTDSAP[]      =  [];
            $otAdvOTDSAP[]     =  [];
            $delayOTDSAP[]     =  [];
            $planPercentSAP[]  =  [];
            $otAdvPercentSAP[] =  [];
            $delayPercentSAP[] =  [];
        } else {
        foreach ($detailOTDSAP as $otd_sap){
                $labelsOTDSAP[]    = Carbon::parse($otd_sap->tgl)->format('j M');
                $planOTDSAP[]      = $otd_sap->plan;
                $otAdvOTDSAP[]     = $otd_sap->ot_adv;
                $delayOTDSAP[]     = $otd_sap->delay;
                $planPercentSAP[]  = $otd_sap->plan_percent;
                $otAdvPercentSAP[] = $otd_sap->ot_percent;
                $delayPercentSAP[] = $otd_sap->delay_percent;
            }
        };

        return view('otd.sap.index', compact('detailOTDSAP','labelsOTDSAP','planOTDSAP','otAdvOTDSAP', 'delayOTDSAP','planPercentSAP', 'otAdvPercentSAP', 'delayPercentSAP'));
    }

    public function indexKAP()
    {
        if(request()->kap_month){
            $month = Carbon::parse(request()->kap_month)->format('m-Y');
            $monthHeader = Carbon::parse(request()->kap_month)->isoFormat('MMMM Y');
            $detailOTDKAP = OTDKAP::whereMonth('tgl', $month)->where('plant', '=', 'kap')->get();
        }else{
            $monthHeader = Carbon::now()->isoFormat('MMMM Y');;
            $detailOTDKAP = OTDKAP::whereMonth('tgl', '=', Carbon::now())->where('plant', '=', 'kap')->get();
        }

        if($detailOTDKAP->isEmpty()){
            $labelsOTDKAP[]    = "Data Tidak Ditemukan";
            $planOTDKAP[]      =  [];
            $otAdvOTDKAP[]     =  [];
            $delayOTDKAP[]     =  [];
            $planPercentKAP[]  =  [];
            $otAdvPercentKAP[] =  [];
            $delayPercentKAP[] =  [];
        } else {
        foreach ($detailOTDKAP as $otd_kap){
                $labelsOTDKAP[]    = Carbon::parse($otd_kap->tgl)->format('j M');
                $planOTDKAP[]      = $otd_kap->plan;
                $otAdvOTDKAP[]     = $otd_kap->ot_adv;
                $delayOTDKAP[]     = $otd_kap->delay;
                $planPercentKAP[]  = $otd_kap->plan_percent;
                $otAdvPercentKAP[] = $otd_kap->ot_percent;
                $delayPercentKAP[] = $otd_kap->delay_percent;
            }
        };
        return view('otd.kap.index', compact('detailOTDKAP','labelsOTDKAP','planOTDKAP','otAdvOTDKAP',
                                                'delayOTDKAP','planPercentKAP', 'otAdvPercentKAP', 'delayPercentKAP'));
    }

    public function createSAP()
    {
        return view('otd.sap.create');
    }

    public function createKAP()
    {
        return view('otd.kap.create');
    }

    public function storeSAP(Request $request)
    {
        OTDSAP::create([
            'tgl' => $request['tgl'],
            'plan' => $request['plan'],
            'ot_adv' => $request['ot_adv'],
            'delay' => $request['delay'],
            'plan_percent' => '90',
            'ot_percent' => round($request['ot_adv'] / $request['plan'] * 100, 1),
            'delay_percent' => round($request['delay'] / $request['plan'] * 100, 1),
            'plant' => 'sap'
        ]);

        Alert::toast('Data OTD SAP berhasil ditambahkan!', 'success');

        return to_route('otd_sap');
    }

    public function storeKAP(Request $request)
    {
        OTDKAP::create([
            'tgl' => $request['tgl'],
            'plan' => $request['plan'],
            'ot_adv' => $request['ot_adv'],
            'delay' => $request['delay'],
            'plan_percent' => '90',
            'ot_percent' => round($request['ot_adv'] / $request['plan'] * 100, 1),
            'delay_percent' => round($request['delay'] / $request['plan'] * 100, 1),
            'plant' => 'kap'
        ]);

        Alert::toast('Data OTD KAP berhasil ditambahkan!', 'success');

        return to_route('otd_kap');
    }

    public function editSAP(OTDSAP $sap)
    {
        return view('otd.sap.edit', compact('sap'));
    }

    public function editKAP(OTDKAP $kap)
    {
        return view('otd.kap.edit', compact('kap'));
    }
    public function updateSAP(Request $request, OTDSAP $sap)
    {
        OTDSAP::where('id', $sap->id)->update([
            'tgl' => $request['tgl'],
            'plan' => $request['plan'],
            'ot_adv' => $request['ot_adv'],
            'delay' => $request['delay'],
            'plan_percent' => '90',
            'ot_percent' => round($request['ot_adv'] / $request['plan'] * 100, 1),
            'delay_percent' => round($request['delay'] / $request['plan'] * 100, 1),
            'plant' => 'sap'
        ]);

        Alert::toast('Data OTD SAP berhasil diperbarui!', 'success');

        return to_route('otd_sap');
    }

    public function updateKAP(Request $request, OTDKAP $kap)
    {
        OTDKAP::where('id', $kap->id)->create([
            'tgl' => $request['tgl'],
            'plan' => $request['plan'],
            'ot_adv' => $request['ot_adv'],
            'delay' => $request['delay'],
            'plan_percent' => '90',
            'ot_percent' => round($request['ot_adv'] / $request['plan'] * 100, 1),
            'delay_percent' => round($request['delay'] / $request['plan'] * 100, 1),
            'plant' => 'kap'
        ]);

        Alert::toast('Data OTD KAP berhasil ditambahkan!', 'success');

        return to_route('otd_2');
    }

    public function destroySAP(OTDSAP $sap)
    {
        OTDSAP::destroy($sap->id);

        Alert::toast('Data OTD SAP Berhasil Dihapus!', 'success');

        return to_route('otd_sap');
    }

    public function destroyKAP(OTDKAP $kap)
    {
        OTDKAP::destroy($kap->id);

        Alert::toast('Data OTD KAP Berhasil Dihapus!', 'success');

        return to_route('otd_kap');
    }
}
