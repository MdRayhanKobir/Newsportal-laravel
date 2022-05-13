<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        }

    public function Websitesetting(){
        $website=DB::table('websites')->orderBy('id','desc')->paginate(3);
        return view('Backend.Website.index',compact('website'));
    }

    public function AddWebsitesetting(){
        return view('Backend.Website.create');
    }


    public function StoreWebsitesetting(Request $request){
        $validated = $request->validate([
            'website_name' => 'required',
            'website_link' => 'required',
        ]);

        $data=array();
        $data['website_name']=$request->website_name;
        $data['website_link']=$request->website_link;
        DB::table('websites')->insert($data);

        $notification=array(
            'message'=>'Successfully Website link insert',
            'alert-type'=>'success'
        );

        return redirect()->route('website.setting')->with($notification);

    }

    public function EditeWebsitesetting($id){
        $website=DB::table('websites')->where('id',$id)->first();
        return view('Backend.Website.edit',compact('website'));
    }

    public function UpdateWebsitesetting(Request $request, $id){
        $data=array();
        $data['website_name']=$request->website_name;
        $data['website_link']=$request->website_link;
        DB::table('websites')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Website link updated',
            'alert-type'=>'success'
        );

        return redirect()->route('website.setting')->with($notification);

    }

    public function DeleteWebsitesetting($id){
        $data=DB::table('websites')->where('id',$id)->delete();
        $notification=array(
            'message'=>'Successfully Website link deleted',
            'alert-type'=>'error'
        );

        return redirect()->route('website.setting')->with($notification);
    }
}
