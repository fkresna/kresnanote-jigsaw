@extends('_layouts.master')

@section('body')
    @foreach ($posts as $post)
        <p></p><a href="post/{{ str_slug($post->getFilename()) }}">{{ $post->title }}</a></p>
    @endforeach
@endsection
