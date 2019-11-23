<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostController extends Controller
{
    public function show($slug){

        // $post = DB::table('posts')->where('slug', $slug)->first();
        $post = Post::where('slug', $slug)->firstorFail(); //using elequent model

        // if(! $post){
        //     abort(404);
        // }

        return view('post', [
            'post' => $post
        ]);

    

    }
}
