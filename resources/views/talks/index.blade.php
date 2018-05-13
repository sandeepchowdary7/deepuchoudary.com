@extends('layout.master')

@section('heading', 'Talks')

@section('subheading', 'Expose yourself to criticism.')

@section('background_image', url('/pics/talks.jpg'))

@section('content')
    <p>
        I occasionally give talks about PHP, Laravel or side projects of mine. And I am searching more and more <strong>opportunities as speaker</strong>. Don't hesitate to <a href="{{ route('about') }}">contact me</a> if you need a speaker for your conference or at your local meetup.
    </p>
    @foreach ($talks as $talk)
        {!! $talk !!}
        <hr>
    @endforeach

@endsection
