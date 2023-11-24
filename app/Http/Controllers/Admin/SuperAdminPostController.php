<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SuperAdminPostController extends Controller
{
    public function ShowPost(){
        $allposts = Post::all();
        return view('superAdmin.allPost', compact('allposts'));
    }

    public function Approve($id){
        $post = Post::find($id);
        $post->status = '0';
        $post->update();
        return back();
    }

    public function Reject($id){
        $post = Post::find($id);
        // dd($post);
        $post->status = '1';
        $post->update();
        return back();
    }
}
