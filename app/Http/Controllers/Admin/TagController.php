<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategory;
use App\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::paginate(10);
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        Tag::create($request->all());
        return redirect()->route('tags.index')->with('success', 'Тэг добавлен');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $tag = Tag::find($id);
        //$tag->slag = null;
        $tag->update($request->all());
        return redirect()->route('tags.index')->with('success', 'Тэг изменён');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect()->route('tags.index')->with('success', 'Тэг удалён');
    }
}



