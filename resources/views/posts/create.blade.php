@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    Title: <input type="text" name="title" value="{{ old('title') }}"><br>
    @error('title') <p style="color:red;">{{ $message }}</p> @enderror

    Content:<br>
    <textarea name="content">{{ old('content') }}</textarea><br>
    @error('content') <p style="color:red;">{{ $message }}</p> @enderror

    <button type="submit">Create Btn</button>
</form>

<a href="{{ route('posts.index') }}">Back</a>
@endsection
