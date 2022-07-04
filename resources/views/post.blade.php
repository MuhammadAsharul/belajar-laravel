@extends('layouts.main')
@section('container')
    <h2 class="mb-5">{{ $post->title }}</h2>
    {{-- {{ $post->body}} --}}
    <p>By Asharul <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>
    {!! $post->body!!}

    <a href="/posts">Back to Post</a>
@endsection