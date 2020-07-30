<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($slug){
       
        $post=Post::where('slug',$slug)->firstOrFail();  
        return view('post',[
            'post'=>$post
        ]);
    }
}
