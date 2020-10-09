@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
@endsection

@section('content')
<div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
            <br>
            <form method="PUT" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')
                <div class="field">                        
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                    </div>
                </div>
                    
                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea class="input" type="text" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea class="input" type="text" name="body" id="body">{{ $article->body }}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Update</button>
                    </div>
                </div>

           </form>            
        </div>
    </div>
@endsection