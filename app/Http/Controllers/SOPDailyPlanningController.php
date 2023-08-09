<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SOP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class SOPDailyPlanningController extends Controller
{
    public function indexDP()
    {
        $dailyPlanSOP = SOP::where('section', '=', 'daily_plan')->orderBy('id', 'asc')->get();
        return view('sop.daily-plan.index', compact('dailyPlanSOP'));
    }
    public function createDP()
    {
        return view('sop.daily-plan.create');
    }

    public function storeDP(Request $request)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        $path = $request->file('file_sop')->storeAs('sop/daily-plan', $customName);

        SOP::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'daily_plan'
        ]);

        Alert::toast('File SOP Daily Planning berhasil diupload!', 'success');

        return to_route('index_dp');

    }

    public function editDP(SOP $dp)
    {
        return view('sop.daily-plan.edit', compact('dp'));
    }

    public function updateDP(Request $request, SOP $dp)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        if($request->oldFile){
            Storage::delete($request->oldFile);
        }

        $path = $request->file('file_sop')->storeAs('sop/daily-plan', $customName);


        SOP::where('id', $dp->id)->update([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'daily_plan'
        ]);

        Alert::toast('File SOP Daily Planning berhasil diupload!', 'success');

        return to_route('index_dp');

    }

    public function destroyDP(SOP $dp)
    {
        if(!empty($dp->filename)){
            unlink("storage/".$dp->path);
        };

        SOP::destroy($dp->id);

        Alert::toast('File SOP Daily Planning berhasil dihapus!', 'success');

        return to_route('index_dp');
    }

    public function view(SOP $dp)
    {
        $filename = $dp->filename;
        $path = storage_path("app/public/{$dp->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
