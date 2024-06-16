@extends('layouts.app')

@section('title', 'Post Details')

@section('content')

    @if(!$post)
        {
        <h1>Post not found!</h1>
        }
    @else
        <div class="container">
            <h1 class="text-center">Post Details</h1>
            <h2>{{ $post['title'] }}</h2>
            <p>{{ $post['content'] }}</p>
            @if (isset($post['is_new']))
                <p>This post is new!</p>
            @endif
        </div class="container">
    @endif
@endsection
