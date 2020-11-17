<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function profile()
    {
        return view('auth.my-account.my-account');
    }

    public function changePassword()
    {
        return view('auth.passwords.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $check = Hash::check($request->input('old_password'), auth()->user()->password);

        if ($check) {
            Auth::user()->update(['password' => Hash::make($request->input('password'))]);
            Session::flash('success', 'Password changed successfully');
        } else {
            Session::flash('error', 'Old password does not match with your current password');
        }

        return back();
    }
}
