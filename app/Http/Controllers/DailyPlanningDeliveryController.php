<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\DailyPlanningDelivery;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class DailyPlanningDeliveryController extends Controller
{
    public function index()
    {
        $plandelivery = DailyPlanningDelivery::orderBy('tgl', 'asc')->get();

        return view('daily-plan.planning-delivery.index', compact('plandelivery'));
        // return $plandelivery;
    }

    public function create()
    {
        return view('daily-plan.planning-delivery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'file|mimes:csv,xls,xlsx,pdf|max:8192'
        ]);

        $customName = $request['file']->getClientOriginalName();

        $path = $request->file('file')->storeAs('planning-delivery', $customName);

        DailyPlanningDelivery::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path
        ]);

        Alert::toast('Planning Delivery berhasil diupload!', 'success');

        return to_route('index_delivery');
    }

    public function edit(DailyPlanningDelivery $delivery)
    {
        return view('daily-plan.planning-delivery.edit', compact('delivery'));
    }

    public function update(Request $request, DailyPlanningDelivery $delivery)
    {

        $request->validate([
            'file' => 'file|mimes:csv,xls,xlsx,pdf|max:8192'
        ]);

        $customName = $request['file']->getClientOriginalName();

        if($request->oldFile){
            Storage::delete($request->oldFile);
        }

        $path = $request->file('file')->storeAs('sop/ccr', $customName);

        DailyPlanningDelivery::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'ccr',
            'sop_code' => $request['sop_code']
        ]);

        Alert::toast('File SOP CCR berhasil diupload!', 'success');

        return to_route('index_delivery');
    }

    public function destroy(DailyPlanningDelivery $delivery)
    {
        if(!empty($delivery->filename)){
            unlink("storage/".$delivery->path);
        };

        DailyPlanningDelivery::destroy($delivery->id);

        Alert::toast('Planning Delivery berhasil dihapus!', 'success');

        return to_route('index_delivery');
    }

    public function download(DailyPlanningDelivery $delivery)
    {
        return response()->download(storage_path("app/public/{$delivery->path}"));
    }
}
