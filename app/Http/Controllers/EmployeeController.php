<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use App\Models\EmployeeListPCD;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    public function index()
    {
        $birthDay = EmployeeListPCD::orderBy('name')->get();

        return view('list-employee.index', compact('birthDay'));
    }
    public function create()
    {
        return view('list-employee.create');
    }
    public function show($id)
    {
        $birthday = EmployeeListPCD::find($id);

        return view('list-employee.show', compact('birthday'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        $imageName = $request['npk'].'-'.$request['name'].'.'.$request->photo->getClientOriginalExtension();
        $imageUpload = $request->file('photo')->storeAs('pcd-employee', $imageName);

        EmployeeListPCD::create([
            'npk' => $request['npk'],
            'name' => $request['name'],
            'tgl_lahir' => Carbon::parse($request['tgl_lahir'])->toDateString(),
            'alamat' => $request['alamat'],
            'photo' => $imageUpload
        ]);

        Alert::toast('Tambah Data Pegawai Berhasil!', 'success');

        return to_route('index_employee');
        // return $birthday;
    }
    public function edit(EmployeeListPCD $birthday)
    {
        return view('list-employee.edit', compact('birthday'));
    }
    public function editPicture(EmployeeListPCD $birthday)
    {
        return view('list-employee.edit-picture', compact('birthday'));
    }

    public function update(Request $request, EmployeeListPCD $birthday)
    {
        EmployeeListPCD::where('id', $birthday->id)->update([
            'npk' => $request['npk'],
            'name' => $request['name'],
            'tgl_lahir' => Carbon::parse($request['tgl_lahir'])->toDateString(),
            'alamat' => $request['alamat']
        ]);

        Alert::toast('Ubah Data Pegawai Berhasil!', 'success');

        return to_route('show_employee', $birthday->id);
    }

    public function updateImage(Request $request, EmployeeListPCD $birthday)
    {
        $request->validate([
            'photo' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096'
        ]);

        $imageName = $birthday->npk.'-'.$birthday->name.'.'.$request->photo->getClientOriginalExtension();

        if($request->oldPhoto){
            Storage::delete($request->oldPhoto);
        }

        $imageUpload = $request->file('photo')->storeAs('pcd-employee', $imageName);

        EmployeeListPCD::where('id', $birthday->id)
        ->update(['photo' => $imageUpload]);

        Alert::toast('Pembaruan Foto Profil Pegawai Berhasil!', 'success');

        return to_route('show_employee',$birthday->id)->with('photo', $imageName);
    }
    public function delete(EmployeeListPCD $birthday)
    {
        if(!empty($birthday->photo)){
            unlink("storage/".$birthday->photo);
        }

        EmployeeListPCD::destroy($birthday->id);

        Alert::toast('Data Pegawai Berhasil Dihapus!', 'success');

        return to_route('index_employee');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new EmployeeImport, $request->file('file'));

        Alert::toast('Ulang Pegawai Berhasil Ditambahkan!', 'success');

        return redirect()->back();
    }
}
