<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $posts = Post::where('status',1)->orderby('id','desc')->get();
        // dd($posts);
        return view('frontend.index', compact('posts'));
    }
}
