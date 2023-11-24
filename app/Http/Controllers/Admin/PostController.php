<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function Store(Request $request){
        $post = new Post();
        $post->tittle = $request->tittle;
        $post->des = $request->des;
        $post->save();
        return redirect()->route('admin.allpost')->with('message', 'Post Added Successfully!');
    }

    public function Show(){
        $allposts = Post::all();
        return view('admin.allpost', compact('allposts'));
    }

    public function EditPost($id){
        $allpost = Post::find($id);
        return view('admin.edit_post', compact('allpost'));
    }

    public function UpdatePost(Request $request, $id){
        $post = Post::find($id);
        $post->tittle = $request->tittle;
        $post->des = $request->des;
        $post->update();
        return redirect()->route('admin.allpost')->with('message', 'Post Updated Successfully!');
    }

    public function DeletePost($id){
        $deletePost = Post::find($id);
        $deletePost->delete();
        return redirect()->route('admin.allpost')->with('message', 'Post Deleted Successfully!');
    }
}
