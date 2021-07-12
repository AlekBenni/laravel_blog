<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function show($slag)
    {
        $tags = Tag::where('slag', $slag)->firstOrFail();
        $posts = $tags->posts()->with('category')->orderBy('id', 'desc')->paginate(2);
        return view('tags.show', compact('tags', 'posts'));
    }
}
