<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
  

    public function index(){
        $posts = Post::where('enabled',1)->take(2)->get();
        //dd($posts);
        return view('front.index', compact('posts'));
    }
}
