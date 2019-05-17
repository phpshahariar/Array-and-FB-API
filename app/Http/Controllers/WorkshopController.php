<?php

namespace App\Http\Controllers;

use App\Author;
use App\Blog;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'blogs'     => Blog::all(),
            'authors'   => Author::all()
        ]);
    }

    public function blogDetail($id)
    {
        return view('blog-detail', [
            'blog'      => Blog::find($id),
            'authors'   => Author::all()
        ]);
    }
}
