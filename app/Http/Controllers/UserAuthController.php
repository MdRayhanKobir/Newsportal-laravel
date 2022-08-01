<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use Illuminate\Http\Request;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserAuthController extends Controller
{
    public function UserLog(){
        return view('main.user-auth.user-registration');
    }
// registration
    public function UserRegistration(Request $request){
        $validated = $request->validate([
            'user_email' => 'required',
            'user_pass' => 'required',
            'user_name' => 'required',
        ]);
// dd($request);
        $data=new UserAuth();
        $data->user_name=$request->user_name;
        $data->user_email=$request->user_email;
        $data->user_pass=Hash::make($request->user_pass);
        $user=$data->save();

        if($user){
            // $request=session()->put('loginId');
            return redirect()->back()->with('success', 'Registration Done');
        }else{
            return redirect()->back()->with('success', 'Registration Failed');
        }

    }
// login
    public function UserRegLog(Request $request){

        $validated = $request->validate([
            'user_email' => 'required',
            'user_pass' => 'required',
        ]);
        $user=UserAuth::where('user_email','=',$request->user_email)->first();

        if($user){
            if(Hash::check($request->user_pass, $user->user_pass))
            {
                $request=session()->put('loginId',$user->id);
               return redirect()->route('home');
            }else{
                return redirect()->back();
            }


        }else{
            return redirect()->back();

        }
    }
//  logout
    public function UserLogout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect()->route('user.log');
        }

    }

    // public function UserDashboard(){
    //     $data=array();
    //     if(Session::has('loginId')){
    //         $data=UserAuth::where('id','=',Session::get('loginId'))->first();
    //     }
    //     return view('main.index',compact('data'));
    // }
}
