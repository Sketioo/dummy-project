@extends('layouts.app')


@section('title', 'Create Post')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" id="title" name="title"/> 
            <label for="content">Content: </label>
            <textarea class="form-control" id="content" name="content"></textarea>
            <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
