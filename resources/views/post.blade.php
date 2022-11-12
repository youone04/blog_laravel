@extends('layouts/main')
@section('container')
    <article>
        <h1>{{ $post->title }}</h1>
        <h2>By {{ $post->author }}</h2>
        <p>{!! $post->body !!}</p>
    </article>
    <a href="/blog">back to blog</a>
@endsection

