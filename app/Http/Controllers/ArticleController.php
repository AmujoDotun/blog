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

    public function show(Article $article){
        // shows a single resource

        // return view($id);
        // dd($articleid);
        // $article = Article::find($id);

        return view('articles.show', [
            'article'=> $article
        ]);

    }

    public function create(){


        return view('articles.create');
    }

    public function store(){
        // die('hello');
        // dump(request()->all()); TO MAKE A REquest using json formate
        
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();


        redirect('/articles');
    }

    public function edit(Article $article){
        // $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }
    
    public function update(Article $article){
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        redirect('/articles/'. $article->id);
    }
    
}
