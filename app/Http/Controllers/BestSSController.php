<?php

namespace App\Http\Controllers;

use App\Models\BestSS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BestSSController extends Controller
{
    public function indexSS()
    {
        $bestSS = BestSS::all();

        return view('monthly-best.ss.index', compact('bestSS'));
    }

    public function createSS()
    {
        return view('monthly-best.ss.create');
    }

    public function storeSS(Request $request)
    {
        $request->validate([
            'image' => 'image|file|mimes:jpeg,jpg,png|max:4096|required',
            'npk' => 'required',
            'name' => 'required'
        ]);

        $imageName = 'Best-SS'.'-'.$request['npk'].'-'.str_replace(' ', '_', $request['name']).'-'. date('F-Y').'.'.$request['image']->getClientOriginalExtension();
        $imageupload = $request->file('image')->storeAs('monthly-best/best-ss', $imageName);

        BestSS::create([
            'image' => $imageupload,
            'npk' => $request['npk'],
            'name' => $request['name'],
            'nilai' => $request['nilai'],
            'tgl' => date('Y-m-d')
        ]);

        Alert::toast('Data SS Terbaik Berhasil Ditambahkan!', 'success');

        return to_route('index_ss');
    }

    public function editSS(BestSS $ss)
    {
        return view('monthly-best.ss.edit', compact('ss'));
    }

    public function updateSS(Request $request, BestSS $ss)
    {
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $imageName = 'Best-SS'.'-'.$request['npk'].'-'.str_replace(' ', '_', $request['name']).'-'.date('F-Y').'.'.$request->image->getClientOriginalExtension();

        if($request->oldImageSS){
            Storage::delete($request->oldImageSS);
        }
        
        $imageupload = $request->file('image')->storeAs('monthly-best/best-ss', $imageName);

        BestSS::where('id', $ss->id)->update([
            'image' => $imageupload,
            'npk' => $request['npk'],
            'name' => $request['name']
        ]);

        Alert::toast('Data SS Terbaik berhasil diubah!', 'success');

        return to_route('index_ss')->with('image', $imageupload);
    }

    public function deleteSS(BestSS $ss)
    {
        if(!empty($ss->image)){
            unlink("storage/".$ss->image);
        }

        BestSS::destroy($ss->id);

        Alert::toast('Data SS Terbaik Berhasil Dihapus!', 'success');

        return to_route('index_ss');
    }

}
