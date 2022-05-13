<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RollController extends Controller
{

    
     public function __construct()
     {
         $this->middleware('auth');

     }
    public function InsertUserRoll(){
        return view('Backend.Roll.insert');
    }
    public function StoretUserRoll(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
        $data['setting']=$request->setting;
        $data['website']=$request->website;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;
        $data['type']=0;

        DB::table('users')->insert($data);

        $notification=array(
            'message'=>'Successfully User Role Insert',
            'alert-type'=>'success'
        );
        return redirect()->route('all.writter')->with($notification);
    }

    public function AllUserRoll(){
        $writter=DB::table('users')->where('users.type',0)->get();
        return view('Backend.Roll.index',compact('writter'));

    }
    public function EditUserRoll($id){
        $writter=DB::table('users')->where('id',$id)->first();
        return view('Backend.Roll.edit',compact('writter'));
    }

    public function UpdateUserRoll(Request $request,$id){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
        $data['setting']=$request->setting;
        $data['website']=$request->website;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['role']=$request->role;


        DB::table('users')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully User Role Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('all.writter')->with($notification);

    }

    public function DeleteUserRoll($id){
        DB::table('users')->where('id',$id)->delete();

    $notification=array(
        'message'=>'Successfully User Role Deleted',
        'alert-type'=>'error'
    );
    return redirect()->route('all.writter')->with($notification);
}


}
