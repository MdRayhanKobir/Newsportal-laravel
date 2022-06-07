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
            ->orWhere('title_bang', 'LIKE', "%{$search}%")
            ->get();
            return view('main.includes.header', compact('post'));

   }
}
