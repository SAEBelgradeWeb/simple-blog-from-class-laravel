@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/posts/create" style="display: block" class="btn btn-primary">Create New Post + </a>
    @foreach($posts as $post)
    <div class="card" style="width: 18rem; display:inline-block; margin: 10px">
        <img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <small>Category: {{$post->category->title}}</small>
            <p class="card-text">{{\Str::limit($post->content, 40)}}</p>
            <a href="/posts/{{$post->id}}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    @endforeach
    </div>

@endsection

