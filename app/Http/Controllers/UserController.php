<?php

namespace App\Http\Controllers;
use Alert;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function myProfile()
    {
        return view('admin.profile.edit');
    }

    public function updateProfile()
    {
        $this->validate(request(), [
            'name' => 'required',
            'username' => 'required'
        ]);

        $user = auth()->user();
        $user->update([
            'name' => request('name'),
            'username' => request('username')
        ]);

        Alert::success('Profile Berhasil Diubah');
        return redirect()->route('home');
    }

    public function changePassword()
    {
        return view('admin.profile.password');
    }

    public function updatePassword()
    {
        $this->validate(request(), [
            'old_password' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if (Hash::check($old_password, $currentPassword)) {
            auth()->user()->update([
                'password' => bcrypt(request('password'))
            ]);
            Alert::success('Password Berhasil Diubah');
            return redirect()->route('home');
        } else {
            Alert::error('Password Gagal Diubah');
            return back()->withErrors(['old_password' => 'Password Lama tidak Valid!']);
        }
    }
}
