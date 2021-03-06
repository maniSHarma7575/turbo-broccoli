@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"/>
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <form action="/articles/{{$article->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input {{$errors->has('title')?'is-danger':''}}" type="text" name="title" id="title" value="{{$article->title}}"/>
                </div>
                @if($errors->has('title'))
                <p class="help is-danger">{{$errors->first('title')}}</p>
                @endif
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea " name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
                @if($errors->has('excerpt'))
                <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                @endif
            </div>
            <div class="field">
                <label class="label" for="excerpt">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                </div>
                @if($errors->has('body'))
                <p class="help is-danger">{{$errors->first('body')}}</p>
                @endif
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    
</div>
@endsection