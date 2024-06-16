@extends('layouts.app')


@section('title', 'Create Post')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            @include('post.partials.form')
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
