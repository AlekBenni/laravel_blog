<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);
        $search = $request->search;
        $posts = Post::like($search)->with('category')->paginate(2);
        return view('posts.search', compact('posts', 'search'));
    }
}




