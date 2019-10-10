@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/posts" method="POST">
            @csrf
            <input type="hidden" name="image" value="https://lorempixel.com/286/180/">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old('content')}}</textarea>
            </div>
            <div class="form-group">
                <label for="user_id">Author</label>
                <select name="user_id" id="" class="form-control">
                @foreach($users as $user)
                        <option value="{{$user->id}}"{{old('user_id') != $user->id ? "" : " selected"}}>{{$user->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"{{old('category_id') != $category->id ? "" : " selected"}}>{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
