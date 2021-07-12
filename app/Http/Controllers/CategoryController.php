<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slag)
    {
        $category = Category::where('slag', $slag)->firstOrFail();
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(3);
        return view('categories.show', compact('category', 'posts'));
    }
}
