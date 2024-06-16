@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    @foreach ($posts as $post)
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['content'] }}</p>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-danger">Delete</button>
        </form>
    @endforeach


@endsection
