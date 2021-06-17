<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Support\Str;

class MainController extends Controller
{

    public function index()
    {

        return view('admin.index');
    }

}
