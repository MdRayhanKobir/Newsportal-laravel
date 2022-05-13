<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SocialController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        }
        
    public function SocialSetting(){
        $social=DB::table('socials')->first();
        return view('Backend.Social.edit',compact('social'));
    }

    public  function UpdateSocialSetting(Request $request,$id){

        $data=array();
        $data['facebook']=$request->facebook;
        $data['instagram']=$request->instagram;
        $data['linkedin']=$request->linkedin;
        $data['youtube']=$request->youtube;
        DB::table('socials')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Social Setting Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('social.setting')->with($notification);

    }


    // SEO SETTING

    public function SeoSetting(){
        $seo=DB::table('seos')->first();
        return view('Backend.Seo.edit',compact('seo'));
    }

    public function UpdateSeoSetting(Request $request,$id){

        $data=array();
        $data['meta_author']=$request->meta_author	;
        $data['meta_title']=$request->meta_title;
        $data['meta_keyword']=$request->meta_keyword;
        $data['meta_description']=$request->meta_description;
        $data['google_analytics']=$request->google_analytics;
        $data['google_varification']=$request->google_varification;
        $data['alexa_analytics']=$request->alexa_analytics;
        DB::table('seos')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully SEO Setting Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('seo.setting')->with($notification);
    }

    // Prayer
    public function PrayerSetting(){
        $prayer=DB::table('prayers')->first();
        return view('Backend.Prayer.edit',compact('prayer'));
    }

    public function UpdatePrayerSetting(Request $request,$id){
        $data=array();
        $data['fajor']=$request->fajor	;
        $data['jahor']=$request->jahor;
        $data['asor']=$request->asor;
        $data['magrib']=$request->magrib;
        $data['esha']=$request->esha;
        $data['jummah']=$request->jummah;

        DB::table('prayers')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully Prayer Setting Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('prayer.setting')->with($notification);

    }

    // LiveTV
    public function LivetvSetting(){
        $livetv=DB::table('livetvs')->first();
        return view('Backend.Livetv.edit',compact('livetv'));
    }

    public function UpdateLivetvSetting(Request $request,$id){

        $data=array();
        $data['embed_code']=$request->embed_code	;
        // $data['status']=$request->status;

        DB::table('livetvs')->where('id',$id)->update($data);

        $notification=array(
            'message'=>'Successfully LiveTV Setting Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('livetv.setting')->with($notification);

    }

    public function ActiveLiveTV($id){
        DB::table('livetvs')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'message'=>'Successfully LiveTV Activated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);

    }

    public function DeActiveLiveTV($id){
        DB::table('livetvs')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'message'=>'Successfully LiveTV DeActivated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);

    }

    // Notice
    public function NoticeSetting(){

        $notice=DB::table('notices')->first();
        return view('Backend.Notice.edit',compact('notice'));
    }

    public function UpdateNoticeSetting(Request $request,$id){
        $data=array();
        $data['notice']=$request->notice;
        DB::table('notices')->where('id',$id)->update($data);
        $notification=array(
            'message'=>'Successfully Notice Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('notice.setting')->with($notification);
    }

    public function ActiveNoticeSetting($id){
        DB::table('notices')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'message'=>'Successfully Notice Activated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);

    }
    public function DeActiveNoticeSetting($id){
        DB::table('notices')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'message'=>'Successfully Notice DeActivated',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($notification);

    }

}
