<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        Alert::toast('Profil berhasil diperbaharui', 'success');

        return back();
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        Alert::toast('Password berhasil diperbaharui', 'success');

        return back();
    }

    /**
     * Change the Profile Picture
     *
     * @param  \App\Http\Requests\ImageRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function image(Request $request)
    {
        $request->validate([
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ]);

        $imageName = auth()->user()->name.'.'.$request->image->getClientOriginalExtension();

        if($request->oldImage){
            Storage::delete($request->oldImage);
        }

        $imageUpload = $request->file('image')->storeAs('profile-pict', $imageName);

        User::where('id', auth()->user()->id)
        ->update(['image' => $imageUpload]);

        Alert::toast('Foto profil berhasil diubah', 'success');

        return back()->with('image', $imageName);
    }

    public function resetImage (Request $request)
    {
        if($request->oldImage){
            Storage::delete($request->oldImage);
        }

        $defaultImage = null;

        $imageUpload = $defaultImage;

        User::where('id', auth()->user()->id)
        ->update(['image' => $imageUpload]);

        Alert::toast('Foto profil berhasil direset', 'success');

        return back();
    }
}
