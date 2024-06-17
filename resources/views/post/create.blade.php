@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create Post</h1>
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            @include('post.partials.form')
            <button type="submit" class="btn btn-primary mt-3">Create Post</button>
        </form>
    </div>
@endsection
