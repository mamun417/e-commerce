<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    public function changePassword()
    {
        return view('admin.auth.passwords.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $check = Hash::check($request->old_password, auth()->user()->password);

        if ($check) {
            Auth::user()->update(['password' => Hash::make($request->password)]);

            Session::flash('success', 'Password changed successfully');
        } else {
            Session::flash('error', 'Old password does not match with your current password');
        }

        return back();
    }

}
