@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">All Posts</h1>
        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">{{ $post['title'] }}</h2>
                    <p class="card-text">{{ $post['content'] }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
