<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\AssyL1DS;
use App\Models\AssyL1NS;
use App\Models\DeliveryL1DS;
use App\Models\DeliveryL1NS;
use Illuminate\Http\Request;
use App\Imports\AssyL1DSImport;
use App\Imports\AssyL1NSImport;
use App\Imports\DeliveryL1DSImport;
use App\Imports\DeliveryL1NSImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class MDPLine1Controller extends Controller
{
    public function index1()
    {
        if(request()->month_l1){
            $monthL1            = Carbon::parse(request()->month_l1)->toDate();
            $monthHeader        = Carbon::parse($monthL1)->isoFormat('MMMM Y');
            $assyDayLine1       = AssyL1DS::whereMonth('tgl', $monthL1)->where('line', '=', '1')->where('shift', '=', 'day')->get();
            $assyNightLine1     = AssyL1NS::whereMonth('tgl', $monthL1)->where('line', '=', '1')->where('shift', '=', 'night')->get();
            $deliveryDayLine1   = DeliveryL1DS::whereMonth('tgl', $monthL1)->where('line', '=', '1')->where('shift', '=', 'day')->get();
            $deliveryNightLine1 = DeliveryL1NS::whereMonth('tgl', $monthL1)->where('line', '=', '1')->where('shift', '=', 'night')->get();
        }else{
            $monthHeader        = Carbon::now()->isoFormat('MMMM Y');
            $assyDayLine1       = AssyL1DS::whereMonth('tgl', '=', Carbon::now())->where('line', '=', '1')->where('shift', '=', 'day')->get();
            $assyNightLine1     = AssyL1NS::whereMonth('tgl', '=', Carbon::now())->where('line', '=', '1')->where('shift', '=', 'night')->get();
            $deliveryDayLine1   = DeliveryL1DS::whereMonth('tgl', '=', Carbon::now())->where('line', '=', '1')->where('shift', '=', 'day')->get();
            $deliveryNightLine1 = DeliveryL1NS::whereMonth('tgl', '=', Carbon::now())->where('line', '=', '1')->where('shift', '=', 'night')->get();
        }

        if($assyDayLine1->isEmpty()){
            $labelAssyL1DS[]    = "Data Tidak Ditemukan";
            $planAssyL1DS[]     = [];
            $actAssyL1DS[]      = [];
        }else{
            foreach($assyDayLine1 as $l1day){
                $labelAssyL1DS[]    = Carbon::parse($l1day->tgl)->format('j');
                $planAssyL1DS[]     = $l1day->plan;
                $actAssyL1DS[]      = $l1day->actual;
            }
        };

        if($assyNightLine1->isEmpty()){
            $labelAssyL1NS[]    = "Data Tidak Ditemukan";
            $planAssyL1NS[]     = [];
            $actAssyL1NS[]      = [];
        }else{
            foreach($assyNightLine1 as $l1night){
                $labelAssyL1NS[]    = Carbon::parse($l1night->tgl)->format('j');
                $planAssyL1NS[]     = $l1night->plan;
                $actAssyL1NS[]      = $l1night->actual;
            }
        };

        if($deliveryDayLine1->isEmpty()){
            $labelDeliveryL1DS[]    = "Data Tidak Ditemukan";
            $planDeliveryL1DS[]     = [];
            $actDeliveryL1DS[]      = [];
        }else{
            foreach($deliveryDayLine1 as $l1day){
                $labelDeliveryL1DS[]    = Carbon::parse($l1day->tgl)->format('j');
                $planDeliveryL1DS[]     = $l1day->plan;
                $actDeliveryL1DS[]      = $l1day->actual;
            }
        };

        if($deliveryNightLine1->isEmpty()){
            $labelDeliveryL1NS[]    = "Data Tidak Ditemukan";
            $planDeliveryL1NS[]     = [];
            $actDeliveryL1NS[]      = [];
        }else{
            foreach($deliveryNightLine1 as $l1night){
                $labelDeliveryL1NS[]    = Carbon::parse($l1night->tgl)->format('j');
                $planDeliveryL1NS[]     = $l1night->plan;
                $actDeliveryL1NS[]      = $l1night->actual;
            }
        };

        return view('monthly-mdp.line-1.index', compact('labelAssyL1DS', 'planAssyL1DS', 'actAssyL1DS',
                                                        'labelAssyL1NS', 'planAssyL1NS', 'actAssyL1NS',
                                                        'labelDeliveryL1DS', 'planDeliveryL1DS', 'actDeliveryL1DS',
                                                        'labelDeliveryL1NS', 'planDeliveryL1NS', 'actDeliveryL1NS', 'monthHeader'));
        // return $assyDayLine1;
    }

    public function createAssy1()
    {
        return view('monthly-mdp.line-1.assy.create');
    }

    public function createDelivery1()
    {
        return view('monthly-mdp.line-1.delivery.create');
    }

    public function uploadAssy1DS()
    {
        return view('monthly-mdp.line-1.import.import-assy1-ds');
    }

    public function uploadDelivery1DS()
    {
        return view('monthly-mdp.line-1.import.import-delivery1-ds');
    }

    public function uploadAssy1NS()
    {
        return view('monthly-mdp.line-1.import.import-assy1-ns');
    }

    public function uploadDelivery1NS()
    {
        return view('monthly-mdp.line-1.import.import-delivery1-ns');
    }

    public function storeAssy1()
    {
        AssyL1DS::create([
            'tgl' => request()->tgl,
            'plan' => request()->plan,
            'actual' => request()->actual,
            'shift' => request()->shift,
            'line' => '1'
        ]);

        Alert::toast('Data Assy Line #1 berhasil ditambahkan!', 'success');

        return to_route('monthly_1');
    }

    public function storeDelivery1()
    {
        DeliveryL1DS::create([
            'tgl' => request()->tgl,
            'plan' => request()->plan,
            'actual' => request()->actual,
            'shift' => request()->shift,
            'line' => '1'
        ]);

        Alert::toast('Data Delivery Line #1 berhasil ditambahkan!', 'success');

        return to_route('monthly_1');
    }

    public function importAssy1DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL1DSImport, $request->file('file'));

        Alert::toast('Data Assy Line 1 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_1');
    }

    public function importDelivery1DS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL1DSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 1 Day Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_1');
    }

    public function importAssy1NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new AssyL1NSImport, $request->file('file'));

        Alert::toast('Data Assy Line 1 Night Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_1');
    }

    public function importDelivery1NS(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DeliveryL1NSImport, $request->file('file'));

        Alert::toast('Data Delivery Line 1 Night Shift Berhasil Ditambahkan!', 'success');

        return to_route('monthly_1');
    }
}
