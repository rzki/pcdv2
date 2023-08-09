<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $usermanage = User::orderBy('id', 'asc')->where('role', '!=', 'admin')->get();
        return view('usermanage.index', compact('usermanage'));
    }

    public function create()
    {
        return view('usermanage.create');
    }

    public function store(Request $request)
    {
        $email = str_replace(' ', '_', $request['name']);

        User::create([
            'name' => $request['name'],
            'npk' => $request['npk'],
            'password' => Hash::make('Astra123'),
            'division' => 'Production Control & Logistics',
            'dept' => 'Planning Control',
            'position' => $request['position'],
            'section' => $request['section'],
            'shift' => $request['shift'],
            'role' => $request['role']
        ]);

        Alert::toast('User berhasil ditambahkan!', 'success');

        return to_route('index_user');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'file|required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new UsersImport, $request->file('file'));

        Alert::toast('Data User Berhasil Ditambahkan!', 'success');

        return redirect()->back();
    }
    public function edit(User $usermanage)
    {
        return view('usermanage.edit', compact('usermanage'));
    }

    public function update(Request $request, User $usermanage)
    {
        $updateUser = User::where('id', $usermanage->id)->update([
            'npk' => $request['npk'],
            'name' => $request['name'],
            'division' => $request['division'],
            'dept' => $request['dept'],
            'position' => $request['position'],
            'section' => $request['section'],
            'shift' => $request['shift'],
            'role' => $request['role']
        ]);

        Alert::toast('Data user berhasil diperbarui!', 'success');

        return to_route('index_user');
        // return $updateUser;
    }
    public function resetPwd(User $usermanage)
    {

        $id = $usermanage->id;

        User::where('id', $id)
        ->update(['password' => Hash::make('Astra123')]);

        Alert::toast('Password berhasil direset!', 'success');

        return to_route('index_user');
    }

    public function deleteUser(User $usermanage)
    {
        User::destroy($usermanage->id);

        Alert::toast('User berhasil dihapus!', 'success');

        return to_route('index_user');
    }
}
