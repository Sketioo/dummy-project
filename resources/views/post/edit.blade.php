@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Post</h1>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('put')
            @include('post.partials.form')
            <button type="submit" class="btn btn-primary mt-3">Update Post</button>
        </form>
    </div>
@endsection
