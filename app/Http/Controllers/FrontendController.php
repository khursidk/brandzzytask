<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function index(){
        $blogs = Blog::orderBy('date', 'desc')->paginate(6); 

        return view ('frontend.index',compact('blogs'));
    }
    public function allblog()
    {
        $blogs = Blog::orderBy('date', 'desc')->paginate(6); // 6 blogs per page
        return view('frontend.blogs', compact('blogs'));
    }

    // Show single blog post
    public function showblog($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blogdetails', compact('blog'));
    }
     
     }
