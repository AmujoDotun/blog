<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PostController extends Controller
{
    public function show($slug){

        $post = DB::table('posts')->where('slug', $slug)->first();

        dd($post);

        // $posts = [
        //     'first-post' => 'This is my first blog post',
        //     'second-post' => 'the second post is more super better'
        // ];
        
        if(! array_key_exists($post, $posts)){
            abort(404);
        }
        return view('post', [
            'post' => $posts[$post]
        ]);

    }
}
