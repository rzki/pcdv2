<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SOP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class SOPVehiclePlanningController extends Controller
{
    public function indexVP()
    {
        $vehiclePlanSOP = SOP::where('section', '=', 'vehicle_plan')->orderBy('id', 'asc')->get();
        return view('sop.vehicle-plan.index', compact('vehiclePlanSOP'));
    }

    public function createVP()
    {
        return view('sop.vehicle-plan.create');
    }

    public function storeVP(Request $request)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        $path = $request->file('file_sop')->storeAs('sop/vehicle-plan', $customName);

        SOP::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'vehicle_plan'
        ]);

        Alert::toast('File SOP Vehicle Planning berhasil diupload!', 'success');

        return to_route('index_vp');

    }

    public function editVP(SOP $vp)
    {
        return view('sop.vehicle-plan.edit', compact('vp'));
    }

    public function updateVP(Request $request, SOP $vp)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        if($request->oldFile){
            Storage::delete($request->oldFile);
        }

        $path = $request->file('file_sop')->storeAs('sop/vehicle-plan', $customName);

        SOP::where('id',$vp->id)->update([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'vehicle_plan'
        ]);

        Alert::toast('File SOP Vehicle Planning berhasil diupload!', 'success');

        return to_route('index_vp');

    }

    public function destroyVP(SOP $vp)
    {
        if(!empty($vp->filename)){
            unlink("storage/".$vp->path);
        };

        SOP::destroy($vp->id);

        Alert::toast('File SOP Vehicle Planning berhasil dihapus!', 'success');

        return to_route('index_vp');
    }

    public function view(SOP $vp)
    {
        $filename = $vp->filename;
        $path = storage_path("app/public/{$vp->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
