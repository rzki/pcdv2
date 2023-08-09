<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AssyL2DS;
use App\Models\AssyL2NS;
use App\Models\DeliveryL2DS;
use App\Models\DeliveryL2NS;
use Illuminate\Http\Request;
use App\Imports\AssyL2DSImport;
use App\Imports\AssyL2NSImport;
use App\Imports\DeliveryL2DSImport;
use App\Imports\DeliveryL2NSImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class MDPLine2Controller extends Controller
{
    public function index2()
    {
        if(request()->month_total){
            $monthResult = Carbon::parse(request()->month_total)->toDate();
            $monthHeader = Carbon::parse($monthResult)->isoFormat('MMMM Y');
            $assyDayLine2 = AssyL2DS::whereMonth('tgl', $monthResult)->get();
            $assyNightLine2 = AssyL2NS::whereMonth('tgl', $monthResult)->get();
            $deliveryDayLine2 = DeliveryL2DS::whereMonth('tgl', $monthResult)->get();
            $deliveryNightLine2 = DeliveryL2NS::whereMonth('tgl', $monthResult)->get();
        }else{
            $monthHeader = Carbon::now()->isoFormat('MMMM Y');
            $assyDayLine2 = AssyL2DS::whereMonth('tgl', '=', Carbon::now())->get();
            $assyNightLine2 = AssyL2NS::whereMonth('tgl', '=', Carbon::now())->get();
            $deliveryDayLine2 = DeliveryL2DS::whereMonth('tgl', '=', Carbon::now())->get();
            $deliveryNightLine2 = DeliveryL2NS::whereMonth('tgl', '=', Carbon::now())->get();
        };

        if($assyDayLine2->isEmpty()){
            $labelAssyL2DS[]    = "Data Tidak Ditemukan";
            $planAssyL2DS[]     = [];
            $actAssyL2DS[]      = [];
        }else{
            foreach($assyDayLine2 as $l2day){
                $labelAssyL2DS[]    = Carbon::parse($l2day->tgl)->format('j');
                $planAssyL2DS[]     = $l2day->plan;
                $actAssyL2DS[]      = $l2day->actual;
            }
        };

        if($assyNightLine2->isEmpty()){
            $labelAssyL2NS[]    = "Data Tidak Ditemukan";
            $planAssyL2NS[]     = [];
            $actAssyL2NS[]      = [];
        }else{
            foreach($assyNightLine2 as $l2night){
                $labelAssyL2NS[]    = Carbon::parse($l2night->tgl)->format('j');
                $planAssyL2NS[]     = $l2night->plan;
                $actAssyL2NS[]      = $l2night->actual;
            }
        };

        if($deliveryDayLine2->isEmpty()){
            $labelDeliveryL2DS[]    = "Data Tidak Ditemukan";
            $planDeliveryL2DS[]     = [];
            $actDeliveryL2DS[]      = [];
        }else{
            foreach($deliveryDayLine2 as $l2day){
                $labelDeliveryL2DS[]    = Carbon::parse($l2day->tgl)->format('j');
                $planDeliveryL2DS[]     = $l2day->plan;
                $actDeliveryL2DS[]      = $l2day->actual;
            }
        };

        if($deliveryNightLine2->isEmpty()){
            $labelDeliveryL2NS[]    = "Data Tidak Ditemukan";
            $planDeliveryL2NS[]     = [];
            $actDeliveryL2NS[]      = [];
        }else{
            foreach($deliveryNightLine2 as $l2night){
                $labelDeliveryL2NS[]    = Carbon::parse($l2night->tgl)->format('j');
                $planDeliveryL2NS[]     = $l2night->plan;
                $actDeliveryL2NS[]      = $l2night->actual;
            }
        };

        return view('monthly-mdp.line-2.index',
                    compact('labelAssyL2DS', 'planAssyL2DS', 'actAssyL2DS',
                            'labelAssyL2NS', 'planAssyL2NS', 'actAssyL2NS',
                            'labelDeliveryL2DS', 'planDeliveryL2DS', 'actDeliveryL2DS',
                            'labelDeliveryL2NS', 'planDeliveryL2NS', 'actDeliveryL2NS', 'monthHeader'));
        // return view('monthly-mdp.line-2.index');
    }

    public function createAssy2()
    {
        return view('monthly-mdp.line-2.assy.create');
    }

    public function createDelivery2()
    {
        return view('monthly-mdp.line-2.delivery.create');
    }

    public function uploadAssy2DS()
    {
        return view('monthly-mdp.line-2.import.import-assy2-ds');
    }

    public function uploadDelivery2DS()
    {
        return view('monthly-mdp.line-2.import.import-delivery2-ds');
    }

    public function uploadAssy2NS()
    {
        return view('monthly-mdp.line-2.import.import-assy2-ns');
    }

    public function uploadDelivery2NS()
    {
        return view('monthly-mdp.line-2.import.import-delivery2-ns');
    }

    public function storeAssy2DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL2DSImport, $request->file('file'));

        Alert::toast('Data Assy Line 2 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function storeDelivery2DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL2DSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 2 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function storeAssy2NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL2NSImport, $request->file('file'));

        Alert::toast('Data Assy Line 2 Night Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function storeDelivery2NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL2NSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 2 Night Shift Berhasil Ditambahkan!', 'success');
        return to_route('monthly_2');
    }

    public function importAssy2DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL2DSImport, $request->file('file'));

        Alert::toast('Data Assy Line 2 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function importDelivery2DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL2DSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 2 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function importAssy2NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL2NSImport, $request->file('file'));

        Alert::toast('Data Assy Line 2 Night Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }

    public function importDelivery2NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL2NSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 2 Night Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_2');
    }
}
