<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show(Article $article){
       return view('articles.show',[
           'article'=>$article
       ]);
    }
    public function index(){
        
        if(request('tag')){
            
            $articles=Tag::where('name',request('tag'))->firstOrFail()->articles;
        }
        else{
        $articles=Article::get();
        }
        return view('articles.index',[
            'articles'=>$articles
        ]);
    }
    public function create(){
        $tags=Tag::all();
        return view('articles.create',[
            'tags'=>$tags
        ]);
    }
    public function store(){
        $article=new Article($this->validateArticles());
        $article->user_id=1;
        
        $article->save();
        $article->tags()->attach(request('tags'));
        return redirect('/articles');
    }
    public function edit(Article $article){
        return view('articles.edit',[
            'article'=>$article
        ]);
    }
    public function update(Article $article){
        $article->update($this->validateArticles());
        return redirect('/articles');
    }
    protected function validateArticles(){
        return request()->validate([
            'title'=>'required',
            'body'=>'required',
            'excerpt'=>'required',
            'tags'=>'exists:tags,id'
        ]);
    }
}
