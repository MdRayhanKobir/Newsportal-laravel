<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'User Successfully Logout');
    }

    // account setting
    public function AccountSetting()
    {
        $id = Auth::user()->id;
        $editProfile = User::find($id);
        return view('Backend.Account.profile', compact('editProfile'));
    }

    public function ProfileEdit()
    {
        $id = Auth::user()->id;
        $editProfile = User::find($id);
        return view('Backend.Account.profileedit', compact('editProfile'));
    }

    public function StoreProfile(Request $request)
    {

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->mobile = $request->mobile;
        $data->gender = $request->gender;
        $data->position = $request->position;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' . $data->image));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $fileName);
            $data['image'] = $fileName;
        }
        $data->save();

        $notification = array(
            'message' => 'Successfully Update Profile',
            'alert-type' => 'success'
        );

        return redirect()->route('account.setting')->with($notification);
    }

    // change password
    public function ShowPass()
    {
        return view('Backend.Account.show_pass');
    }

    public function ChangePass(Request $request)
    {

        $validated = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashpassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashpassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => 'Successfully Update Password',
                'alert-type' => 'success'
            );

            return redirect()->route('login')->with($notification);
        } else {
            return redirect()->back();
        }
    }
}
