@extends('layout.master')

@section('heading', 'Nuno Maduro')

@section('subheading', 'Web Developer. Laravel.')

@section('content')
    @foreach ($posts as $post)
        @include('posts.show', ['post' => $post])
        <hr>
    @endforeach
@endsection
