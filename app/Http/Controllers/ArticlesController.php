<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        //die('hello');
        //$article = Article::findOrFail($article);   
        //return $article;

        return view('articles.show', ['article' => $article] );
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //dump(request()->all());
        
        Article::create($this->validateArticle());

        /*
        Article::create(request()->validate([
            //for setting min and max length validation
            //'title' => ['required', 'min:3' , 'max:255'],
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));*/
        
        //return $validatedAttributes;

        //$article = new Article();
        //$article->title = request('title');
        //$article->excerpt = request('excerpt');
        //$article->body = request('body');
        //$article->save();
        
        /*
        Article::create([
            'title' => request('title'),
            'excerpt' => request('excerpt'),
            'body' => request('body')
        ]);
        */

        //Article::create($validatedAttributes);

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        //$article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {   
        $article->update($this->validateArticle);
        /*
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));
        */

        //$article = Article::find($id);
        //$article->update($validatedAttributes);
        /*
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        */

        return redirect('/articles/'.$article->id);
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }

    public function destroy()
    {

    }

}