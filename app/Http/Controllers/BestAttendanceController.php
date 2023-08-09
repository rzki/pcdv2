<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BestAtt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BestAttendanceController extends Controller
{
        public function indexAtt()
        {
            $bestAtt = BestAtt::all();

            return view('monthly-best.attendance.index', compact('bestAtt'));
        }
        public function createAtt()
        {
            return view('monthly-best.attendance.create');
        }
        public function storeAtt(Request $request)
        {
            $request->validate([
                'images' => 'image|file|mimes:jpeg,jpg,png|max:4096|required',
                'name' => 'required'
            ]);

            $imageName = str_replace(' ', '_', $request['name']).'-'. date('F-Y').'.'.$request['images']->getClientOriginalExtension();
            $imageupload = $request->file('images')->storeAs('monthly-best/best-attendance', $imageName);

            BestAtt::create([
                'image' => $imageupload,
                'npk' => $request['npk'],
                'name' => $request['name'],
                'tgl' => date('Y-m-d')
            ]);

            Alert::toast('Data Absensi Terbaik Berhasil Ditambahkan!', 'success');

            return to_route('index_att');
        }
        public function editAtt(BestAtt $att)
        {
            return view('monthly-best.attendance.edit', compact('att'));
        }
        public function updateAtt(Request $request, BestAtt $att)
        {
            $request->validate([
                'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);

            $imageName = 'Best-Attendance'.'-'.$request['npk'].'-'.str_replace(' ', '_', $request['name']).'-'. date('F-Y').'.'.$request['image']->getClientOriginalExtension();

            if($request->oldImageAtt){
                Storage::delete($request->oldImageAtt);
            }

            $imageupload = $request->file('image')->storeAs('monthly-best/best-attendance', $imageName);

            BestAtt::where('id', $att->id)
            ->update([
                'image' => $imageupload,
                'npk' => $request['npk'],
                'name' => $request['name']
            ]);

            Alert::toast('Data Absensi Terbaik berhasil diubah', 'success');

            return to_route('index_att')->with('image', $imageName);
        }

        public function deleteAtt(BestAtt $att)
        {
            if(!empty($att->photo)){
                unlink("storage/".$att->photo);
            }

            BestAtt::destroy($att->id);

            Alert::toast('Data Absensi Terbaik Berhasil Dihapus!', 'success');

            return to_route('index_att');
        }
}
