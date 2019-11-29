<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // public function show($id){
    //     return view($id);
    // }


    public function index(){
        //render a list of resourse
        $article = Article::latest()->get();
        
        return view('articles.index', ['article' => $article]);
    }

    public function show($id){
        // shows a single resource

        // return view($id);
        // dd($articleid);

        $article = Article::find($id);
        return view('articles.show', [
            'article'=> $article
        ]);

    }
}
