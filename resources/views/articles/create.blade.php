@extends('layout')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"/>
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <form action="/articles" method="post">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input {{$errors->has('title')?'is-danger':''}}" type="text" name="title" id="title" value="{{old('title')}}"/>
                </div>
                @if($errors->has('title'))
                <p class="help is-danger">{{$errors->first('title')}}</p>
                @endif
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>
                <div class="control">
                    <textarea class="textarea {{$errors->has('excerpt')?'is-danger':''}}" name="excerpt" id="excerpt">{{old('excerpt')}}</textarea>
                </div>
                @if($errors->has('excerpt'))
                <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                @endif
            </div>
            <div class="field">
                <label class="label" for="excerpt">Body</label>
                <div class="control">
                    <textarea class="textarea {{$errors->has('body')?'is-danger':''}}" name="body" id="body">{{old('body')}}</textarea>
                </div>
                @if($errors->has('body'))
                <p class="help is-danger">{{$errors->first('body')}}</p>
                @endif
            </div>
            <div class="field">
                <label class="label" for="excerpt">Tags</label>
                <div class="control">
                <select name="tags[]" multiple>
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>{{$tag}}
                @endforeach
                </select>
                </div>
                @if($errors->has('tags'))
                <p class="help is-danger">{{$message}}</p>
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