<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller
{
    public function Home(){
        return view('main.index');
    }

    // multi-language
    public function English(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','english');
        return redirect()->back();

    }
    public function Bangla(){
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang','bangla');
        return redirect()->back();

    }


    // Singlepost
    public function Singlepost($id){
        $post=DB::table('posts')
        ->join('categories','posts.category_id','categories.id')
        ->join('subcategories','posts.subcategory_id','subcategories.id')
        ->join('districs','posts.district_id','districs.id')
        ->join('users','posts.user_id','users.id')
        ->select('posts.*','categories.category_eng','categories.category_bang',
        'subcategories.subcategory_eng','subcategories.subcategory_bang',
        'districs.district_eng','districs.district_bang')
        ->where('posts.id',$id)->first();
        return view('main.singlepost',compact('post'));

    }

    public function Allpost($id,$category_eng){
        $categoryallpost=DB::table('posts')->where('category_id',$id)->orderBy('id','desc')->paginate(5);
        return view('main.allpost',compact('categoryallpost'));
    }
    public function Suballpost($id,$subcategory_eng){
        $subcategoryallpost=DB::table('posts')->where('subcategory_id',$id)->orderBy('id','desc')->paginate(5);
        return view('main.suballpost',compact('subcategoryallpost'));
    }

    // Search Distric
    public function SearchGetdistrict($subdistric_id)
    {
        $sub = DB::table('subdistricts')->where('district_id',$subdistric_id)->get();
        return response()->json($sub);
    }

    public function SearchDistrict(Request $request){
        $district=$request->district_id;
        $subdistrict=$request->subdistrict_id;


        $categoryallpost=DB::table('posts')->where('district_id',$district)->where('subdistrict_id',$subdistrict)->orderBy('id','desc')->paginate(5);
        return view('main.allpost',compact('categoryallpost'));

    }





}