<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules\Unique;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        }

    public function Index(){

        $post=DB::table('posts')
        ->join('categories','posts.category_id','categories.id')
        ->join('subcategories','posts.subcategory_id','subcategories.id')
        ->join('districs','posts.district_id','districs.id')
        ->join('subdistricts','posts.subdistrict_id','subdistricts.id')
        ->select('posts.*','categories.category_eng','categories.category_bang','subcategories.subcategory_eng'
        ,'subcategories.subcategory_bang','districs.district_eng','districs.district_bang',
        'subdistricts.subdistrict_eng','subdistricts.subdistrict_bang')
        ->orderBy('id','desc')->paginate(5);

        return view('Backend.Post.index',compact('post'));
    }



    public function CreatePost(){
        $category=DB::table('categories')->get();
        $district=DB::table('districs')->get();
        return view('Backend.Post.create',compact('category','district'));
    }

    public function StorePost(Request $request){
        $validated = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
        ]);

        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_id']=$request->subcategory_id;
        $data['district_id']=$request->district_id;
        $data['subdistrict_id']=$request->subdistrict_id;
        $data['user_id']=Auth::id();
        $data['title_eng']=$request->title_eng;
        $data['title_bang']=$request->title_bang;
        $data['details_eng']=$request->details_eng;
        $data['details_bang']=$request->details_bang;
        $data['tags_eng']=$request->tags_eng;
        $data['tags_bang']=$request->tags_bang;
        $data['headline']=$request->headline;
        $data['first_section']=$request->first_section;
        $data['first_section_thumnail']=$request->first_section_thumnail;
        $data['bigthumnail']=$request->bigthumnail;
        $data['post_date']=date('d-m-Y');
        $data['post_month']=date('F');

        $image=$request->image;
        if($image){
            $imageuniqueName=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/postimg/'.$imageuniqueName);
            $data['image']='image/postimg/'.$imageuniqueName;

            DB::table('posts')->insert($data);
            $notification=array(
                'message'=>'Successfully Post Insert',
                'alert-type'=>'success'
            );

            return redirect()->route('create.posts')->with($notification);

        }
        else{
            return redirect()->back();
        }


    }



       public function EditPost($id){
           $post=DB::table('posts')->where('id',$id)->first();
           $category=DB::table('categories')->get();
           $district=DB::table('districs')->get();
           $subcategory=DB::table('subcategories')->where('category_id',$post->category_id)->get();
           $subsistrict=DB::table('subdistricts')->where('district_id',$post->district_id)->get();
           return view('Backend.Post.edit',compact('post','category','district','subcategory','subsistrict'));
       }

       public function UpdatePost(Request $request,$id){
        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_id']=$request->subcategory_id;
        $data['district_id']=$request->district_id;
        $data['subdistrict_id']=$request->subdistrict_id;
        $data['user_id']=Auth::id();
        $data['title_eng']=$request->title_eng;
        $data['title_bang']=$request->title_bang;
        $data['details_eng']=$request->details_eng;
        $data['details_bang']=$request->details_bang;
        $data['tags_eng']=$request->tags_eng;
        $data['tags_bang']=$request->tags_bang;
        $data['headline']=$request->headline;
        $data['first_section']=$request->first_section;
        $data['first_section_thumnail']=$request->first_section_thumnail;
        $data['bigthumnail']=$request->bigthumnail;
        $data['post_date']=date('d-m-Y');
        $data['post_month']=date('F');

        $oldimg=$request->oldimg;
        $image=$request->image;
        if($image){
            $imageuniqueName=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('image/postimg/'.$imageuniqueName);
            $data['image']='image/postimg/'.$imageuniqueName;

            DB::table('posts')->where('id',$id)->update($data);
            unlink($oldimg);
            $notification=array(
                'message'=>'Successfully Post Updated',
                'alert-type'=>'success'
            );

            return redirect()->route('all.posts')->with($notification);

        }
        else{
            $data['image']=$oldimg;
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'message'=>'Successfully Post Updated',
                'alert-type'=>'success'
            );

            return redirect()->route('all.posts')->with($notification);
        }


       }

       public function DeletePost($id){
           $post=DB::table('posts')->where('id',$id)->first();
           unlink($post->image);
           $data=DB::table('posts')->where('id',$id)->delete();

           $notification=array(
            'message'=>'Successfully Post Deleted',
            'alert-type'=>'error'
        );

        return redirect()->route('all.posts')->with($notification);
       }
















    public function GetSubcategory($subcategory_id){
        $sub = DB::table('subcategories')->where('category_id',$subcategory_id)->get();
  return response()->json($sub);

}
public function GetSubdistrict($subdistrict_id){
    $sub = DB::table('subdistricts')->where('district_id',$subdistrict_id)->get();
  return response()->json($sub);

}

}
