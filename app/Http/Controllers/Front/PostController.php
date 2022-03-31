<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Brackets\AdminGenerator\Generate\StoreRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($id){
        $latests =Post::where('enabled',1)->limit(3)->orderBy('id', 'DESC')->get();
        $post = Post::findOrFail($id);
        return view('front.post.show', compact('post','latests'));
    }

    public function index(){
        $latests =Post::where('enabled',1)->limit(3)->orderBy('id', 'DESC')->get();
        //$posts = Post::where('enabled',1)->orderBy('id', 'DESC')->get();
        $posts = Post::where('enabled',1)->orderBy('id', 'DESC')->paginate(10);
        return view('front.post.index', compact('posts','latests'));
    }
}
