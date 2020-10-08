<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {

    //$article = App\Article::first();
    //$article = App\Article::all();
    //$article = App\Article::take(1)->get();
    //$article = App\Article::paginate();

    //return $article;
    
    return view('about',[
        //'articles' => App\Article::latest()->get() For all articles in descending
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('articles/article','ArticlesController@show');

Route::get('post/{id}' ,'PostController@show');