@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div>{{ $post->blog_content }}</div>
@endsection
