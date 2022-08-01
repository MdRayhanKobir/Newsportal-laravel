<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LiveSearchController extends Controller
{
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        // Search in the title and body columns from the posts table
        $post = DB::table('posts')
            ->where('title_eng', 'LIKE', "%{$search}%")
            ->orWhere('post_date', 'LIKE', "%{$search}%")
            ->get();

            return view('main.search', compact('post'));

   }

   public function SearchSinglepost($id)
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
}
