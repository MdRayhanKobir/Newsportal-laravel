<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Notifications\NewsCollect;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\Color\Rgb;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Notification;


class HomeController extends Controller
{
    public function Home()
    {
        return view('main.index');
    }

    // multi-language
    public function English()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'english');
        return redirect()->back();
    }
    public function Bangla()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'bangla');
        return redirect()->back();
    }


    // Singlepost
    public function Singlepost($id)
    {
        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('districs', 'posts.district_id', 'districs.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->select(
                'posts.*',
                'categories.category_eng',
                'categories.category_bang',
                'subcategories.subcategory_eng',
                'subcategories.subcategory_bang',
                'districs.district_eng',
                'districs.district_bang'
            )
            ->where('posts.id', $id)->first();
        return view('main.singlepost', compact('post'));
    }

    public function Allpost($id, $category_eng)
    {
        $categoryallpost = DB::table('posts')->where('category_id', $id)->orderBy('id', 'desc')->paginate(5);
        return view('main.allpost', compact('categoryallpost'));
    }


    public function Suballpost($id, $subcategory_eng)
    {
        $subcategoryallpost = DB::table('posts')->where('subcategory_id', $id)->orderBy('id', 'desc')->paginate(5);
        return view('main.suballpost', compact('subcategoryallpost'));
    }

    // Search Distric
    public function SearchGetdistrict($subdistric_id)
    {
        $sub = DB::table('subdistricts')->where('district_id', $subdistric_id)->get();
        return response()->json($sub);
    }

    public function SearchDistrict(Request $request)
    {
        $district = $request->district_id;
        $subdistrict = $request->subdistrict_id;


        $categoryallpost = DB::table('posts')->where('district_id', $district)->where('subdistrict_id', $subdistrict)->orderBy('id', 'desc')->paginate(5);
        return view('main.allpost', compact('categoryallpost'));
    }


    // about us
    public function AboutUs(){
        return view('main.aboutus');
    }
    // terms condition
    public function TermsCondition(){
        return view('main.termscondition');
    }
    // contact us
    public function ContactUs(){
        return view('main.contactus');
    }

    // share news user
    public function StoreNews(Request $request){
        // dd($request);
        $data = array();
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['number']=$request->number;
        $data['details']=$request->details;
        DB::table('newsshare')->insert($data);
        $news=User::get();
        Notification::send($news, new NewsCollect($data));
        return redirect()->back();


    }

    public function ViewNews(){
        $news=DB::table('newsshare')->orderBy('id', 'desc')->paginate(5);
        return view('Backend.Sharenews.share_news',compact('news'));
    }



}
