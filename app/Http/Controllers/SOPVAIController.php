<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SOP;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use RealRashid\SweetAlert\Facades\Alert;

class SOPVAIController extends Controller
{
    public function indexVAI()
    {
        $vaiSOP = SOP::where('section', '=', 'vai')->orderBy('id', 'asc')->get();
        return view('sop.vai.index', compact('vaiSOP'));
    }

    public function createVAI()
    {
        return view('sop.vai.create');
    }

    public function storeVAI(Request $request)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);

        $customName = $request['file_sop']->getClientOriginalName();

        $path = $request->file('file_sop')->storeAs('sop/vai', $customName);

        SOP::create([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'vai'
        ]);

        Alert::toast('File SOP VAI berhasil diupload!', 'success');

        return to_route('index_vai');

    }

    public function editVAI(SOP $vai)
    {
        return view('sop.vai.edit', compact('vai'));
    }

    public function updateVAI(Request $request, SOP $vai)
    {
        $request->validate([
            'file_sop' => 'file|mimes:pdf|max:4096'
        ]);
        $customName = $request['file_sop']->getClientOriginalName();

        if($request->oldFile){
            Storage::delete($request->oldFile);
        }

        $path = $request->file('file_sop')->storeAs('sop/vai', $customName);

        SOP::where('id', $vai->id)->update([
            'tgl' => Carbon::now()->toDateString(),
            'filename' => $customName,
            'path' => $path,
            'section' => 'vai'
        ]);

        Alert::toast('File SOP VAI berhasil diperbarui!', 'success');

        return to_route('index_vai');

    }

    public function destroyVAI(SOP $vai)
    {
        if(!empty($vai->filename)){
            unlink("storage/".$vai->path);
        };

        SOP::destroy($vai->id);

        Alert::toast('File SOP VAI berhasil dihapus!', 'success');

        return to_route('index_vai');
    }

    public function view(SOP $vai)
    {
        $filename = $vai->filename;
        $path = storage_path("app/public/{$vai->path}");

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
