<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }


    public function Videogallery(){
        $video=DB::table('videos')->orderBy('id','desc')->paginate(3);
        return view('Backend.Videogalllery.index',compact('video'));
    }

    public function CreateVideogallery(){
        return view('Backend.Videogalllery.create');
    }

    public function AddVideogallery(Request $request){
        $data=array();
        $data['video_title']=$request->video_title;
        $data['embed_code']=$request->embed_code;
        $data['type']=$request->type;
        DB::table('videos')->insert($data);

        $notification = array(
            'message' => 'Successfully Videogalleery Insert',
            'alert-type' => 'success'
        );

        return redirect()->route('video.gallery')->with($notification);

    }

    public function EditVideogallery($id){
        $video=DB::table('videos')->where('id',$id)->first();
        return view('Backend.Videogalllery.edit',compact('video'));
    }

    public function UpdateVideogallery(Request $request,$id){

        $data=array();
        $data['video_title']=$request->video_title;
        $data['embed_code']=$request->embed_code;
        $data['type']=$request->type;
        DB::table('videos')->where('id',$id)->update($data);

        $notification = array(
            'message' => 'Successfully Videogalleery updated',
            'alert-type' => 'success'
        );

        return redirect()->route('video.gallery')->with($notification);

    }

    public function DeleteVideogallery($id){
        DB::table('videos')->where('id',$id)->delete();

      $notification = array(
            'message' => 'Successfully Videogalleery deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('video.gallery')->with($notification);

    }
}
