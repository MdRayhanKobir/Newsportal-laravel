<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }


    public function Index()
    {
        $subcategory = DB::table('subcategories')
            ->join('categories', 'subcategories.category_id', 'categories.id')
            ->select('subcategories.*', 'categories.category_eng', 'categories.category_bang')
            ->orderBy('id', 'desc')->paginate(5);
        return view('Backend.Subcategory.index', compact('subcategory'));
    }

    public function AddSubCategory()
    {
        $category = DB::table('categories')->get();
        return view('Backend.Subcategory.create', compact('category'));
    }
    public function StoresubCategory(Request $request)
    {

        $validated = $request->validate([
            'subcategory_eng' => 'required|max:255',
            'subcategory_bang' => 'required|max:255',
        ]);

        $data = array();
        $data['subcategory_eng'] = $request->subcategory_eng;
        $data['subcategory_bang'] = $request->subcategory_bang;
        $data['category_id'] = $request->category_id;
        DB::table('subcategories')->insert($data);

        $notification = array(
            'message' => 'Successfully SubCategory Insert',
            'alert-type' => 'success'
        );

        return redirect()->route('subcategories')->with($notification);
    }

    public function EditsubCategory($id)
    {

        $subcategory = DB::table('subcategories')->where('id', $id)->first();
        $category = DB::table('categories')->get();

        return view('Backend.Subcategory.edit', compact('subcategory', 'category'));
    }

    public function UpdatesubCategory(Request $request, $id)
    {
        $data = array();
        $data['subcategory_eng'] = $request->subcategory_eng;
        $data['subcategory_bang'] = $request->subcategory_bang;
        $data['category_id'] = $request->category_id;
        DB::table('subcategories')->where('id', $id)->update($data);

        $notification = array(
            'message' => 'Successfully SubCategory Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('subcategories')->with($notification);
    }

    public function DeletesubCategory($id)
    {
        $data = DB::table('subcategories')->where('id', $id);
        $data->delete();

        $notification = array(
            'message' => 'Successfully SubCategory Deleted',
            'alert-type' => 'error'
        );

        return redirect()->route('subcategories')->with($notification);
    }
}
