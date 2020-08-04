@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
           @foreach($conversations as $conversation)
           <h2><a href="/conversations/{{$conversation->id}}">{{$conversation->title}}</a></h2>
           @endforeach
    </div>
</div>
@endsection
