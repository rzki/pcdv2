<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SOP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class SOPCCRController extends Controller
{
    public function indexCCR()
    {
        $ccrSOP = SOP::where('section', '=', 'ccr')->orderBy('id', 'asc')->get();
        return view('sop.ccr.index', compact('ccrSOP'));
    }

    public function createCCR()
    {
        return view('sop.ccr.create');
    }

    public function storeCCR(Request $request)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        $path = $request->file('file_sop')->storeAs('sop/ccr', $customName);

        SOP::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'ccr'
        ]);

        Alert::toast('File SOP CCR berhasil diupload!', 'success');

        return to_route('index_ccr');

    }

    public function editCCR(SOP $ccr)
    {
        return view('sop.ccr.edit', compact('ccr'));
    }

    public function updateCCR(Request $request, SOP $ccr)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        if($request->oldFile){
            Storage::delete($request->oldFile);
        }

        $path = $request->file('file_sop')->storeAs('sop/ccr', $customName);

        SOP::where('id', $ccr->id)->update([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'ccr'
        ]);

        Alert::toast('File SOP CCR berhasil diupload!', 'success');

        return to_route('index_ccr');

    }

    public function destroyCCR(SOP $ccr)
    {
        if(!empty($ccr->filename)){
            unlink("storage/".$ccr->path);
        };

        SOP::destroy($ccr->id);

        Alert::toast('File SOP CCR berhasil dihapus!', 'success');

        return to_route('index_ccr');
    }

    public function view(SOP $ccr)
    {
        $filename = $ccr->filename;
        $path = storage_path("app/public/{$ccr->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
