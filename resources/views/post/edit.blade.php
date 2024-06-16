@extends('layouts.app')


@section('title', 'Edit Post')

@section('content')
<form action="{{ route('posts.update', ['post' => $post->id])}}" method="post">
    @csrf
    @method('put')
    @include('post.partials.form')
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Post</button>
  </div>
</form>
@endsection
