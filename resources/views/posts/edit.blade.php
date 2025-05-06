@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method('PUT')
    Title: <input type="text" name="title" value="{{ old('title', $post->title) }}"><br>
    @error('title') <p style="color:red;">{{ $message }}</p> @enderror

    Content:<br>
    <textarea name="content">{{ old('content', $post->content) }}</textarea><br>
    @error('content') <p style="color:red;">{{ $message }}</p> @enderror

    <button type="submit">Update</button>
</form>

<a href="{{ route('posts.index') }}">Back</a>
@endsection
