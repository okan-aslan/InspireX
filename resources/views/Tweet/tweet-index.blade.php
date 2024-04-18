@extends('layout.app')

@section('content')

    @auth
        @include('Tweet.tweet-create')
    @endauth

    @foreach ($tweets as $tweet)
        @include('Tweet.tweet-card')

        {{-- @include('Components.comment-write')

        @include('Components.comment') --}}
    @endforeach


@endsection
