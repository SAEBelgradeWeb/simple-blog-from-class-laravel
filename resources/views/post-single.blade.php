@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/posts/{{$post->id}}/edit" style="display: block" class="btn btn-primary">Edit Post</a>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete this post</button>
        </form>


        <div class="card">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
                <h5>Author: {{$post->user->name}}, Date: {{ $post->created_at->format('d. M Y')}}</h5>
            </div>
            <div class="card-body">
                <img src="{{$post->image}}" alt="{{$post->title}}" style="float:left; margin: 0 10px 10px 0">
                {{$post->content}}
            </div>
        </div>

    </div>

@endsection
