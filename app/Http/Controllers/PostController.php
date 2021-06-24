<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(10);
        return view('admin.posts.index')->with([
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
         Post::create($request->all());
         return redirect()->back();
    }

    public function destroy($id){
        Post::destroy($id);
        return redirect()->back();
    }
}
