<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }
        
 public function Index(){
     $category=DB::table('categories')->orderBy('id','desc')->paginate(5);
     return view('Backend.Category.index',compact('category'));

 }

 public function AddCategory(){
     return view('Backend.Category.create');
 }

 public function StoreCategory(Request $request){
    $validated = $request->validate([
        'category_eng' => 'required|unique:categories|max:255',
        'category_bang' => 'required|unique:categories|max:255',
    ]);

    $data=array();
    $data['category_eng']=$request->category_eng;
    $data['category_bang']=$request->category_bang;
    DB::table('categories')->insert($data);

    $notification=array(
        'message'=>'Successfully Category Insert',
        'alert-type'=>'success'
    );

    return redirect()->route('categories')->with($notification);

 }

 public function EditCategory($id){
     $category=DB::table('categories')->where('id',$id)->first();
     return view('Backend.Category.edit',compact('category'));
 }

 public function UpdateCategory(Request $request,$id){
    $data=array();
    $data['category_eng']=$request->category_eng;
    $data['category_bang']=$request->category_bang;
    DB::table('categories')->where('id',$id)->update($data);

    $notification=array(
        'message'=>'Successfully Category Updated',
        'alert-type'=>'success'
    );

    return redirect()->route('categories')->with($notification);

 }

 public function DeleteCategory($id){
     $data=DB::table('categories')->where('id',$id);
     $data->delete();

     $notification=array(
        'message'=>'Successfully Category Deleted',
        'alert-type'=>'error'
    );

    return redirect()->route('categories')->with($notification);
 }

}
