<?php

namespace App\Http\Controllers;

use App\Author;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.blog', ['authors' => Author::all()]);
    }

    public function uploadBlogImage($request)
    {
        $image = $request->file('blog_image');
        $uploadPath = './blog-images/';
        $imageName = $image->getClientOriginalName();
        $image->move($uploadPath, $imageName);
        return $uploadPath.$imageName;
    }

    public function newBlog(Request $request)
    {
        Blog::create($request->except('blog_image') + ['blog_image' => $this->uploadBlogImage($request)]);
        return redirect()->back()->with('message', 'Blog info create successfully');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage-blog', ['blogs' => Blog::all()]);
    }
}
