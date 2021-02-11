<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function myProfile()
    {
        return view('profile.setting');
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
        return back();
    }

    public function changePassword()
    {
        return view('profile.password');
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
            return redirect()->route('home');
        } else {
            return back()->withErrors(['old_password' => 'Password Lama tidak Valid!']);
        }
    }
}
