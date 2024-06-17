@extends('layouts.app')

@section('title', 'Post Details')

@section('content')
    <div class="container mt-5">
        @if(!$post)
            <h1 class="text-center">Post not found!</h1>
        @else
            <h1 class="text-center">Post Details</h1>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">{{ $post['title'] }}</h2>
                    <p class="card-text">{{ $post['content'] }}</p>
                    @if (isset($post['is_new']))
                        <p class="card-text"><small class="text-muted">This post is new!</small></p>
                    @endif
                </div>
            </div>
        @endif
    </div>
@endsection
