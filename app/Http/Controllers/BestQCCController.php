<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\BestQCC;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BestQCCController extends Controller
{
    public function indexQCC()
    {
        $bestQCC = BestQCC::all();

        return view('monthly-best.qcc.index', compact('bestQCC'));
    }

    public function createQCC()
    {
        return view('monthly-best.qcc.create');
    }

    public function storeQCC(Request $request)
    {
        $request->validate([
            'images' => 'image|file|mimes:jpeg,jpg,png|max:4096|required'
        ]);

        $imageName = 'Best QCC'.'-'.Carbon::now()->isoFormat('MMMM Y').'.'.$request['images']->getClientOriginalExtension();
        $imageupload = $request->file('images')->storeAs('monthly-best/best-qcc', $imageName);

        BestQCC::create([
            'image' => $imageupload,
            'tgl' => date('Y-m-d')
        ]);

        Alert::toast('Data QCC Terbaik Berhasil Ditambahkan!', 'success');

        return to_route('index_qcc');
    }

    public function editQCC(BestQCC $qcc)
    {
        return view('monthly-best.qcc.edit', compact('qcc'));
    }

    public function updateQCC(Request $request, BestQCC $qcc)
    {
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $imageName = 'Best QCC'.'-'.Carbon::now()->isoFormat('MMMM Y').'.'.$request['image']->getClientOriginalExtension();

        if($request->oldImageQCC){
            Storage::delete($request->oldImageQCC);
        };
        
        $imageupload = $request->file('image')->storeAs('monthly-best/best-qcc', $imageName);

        BestQCC::where('id', $qcc->id)
        ->update([
            'image' => $imageupload
        ]);

        Alert::toast('Data QCC Terbaik berhasil diubah!', 'success');

        return to_route('index_qcc')->with('image', $imageName);
    }

    public function deleteQCC(BestQCC $qcc)
    {
        if(!empty($qcc->image)){
            unlink("storage/".$qcc->image);
        }

        BestQCC::destroy($qcc->id);

        Alert::toast('Data QCC Terbaik Berhasil Dihapus!', 'success');

        return to_route('index_qcc');
    }

}
