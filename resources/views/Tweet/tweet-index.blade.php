@extends('layout.app')

@section('content')
    @auth
        @include('Tweet.tweet-create')
    @endauth

    @foreach ($tweets as $tweet)
        @include('Tweet.tweet-card')
        @auth
            @include('Components.comment-write')

            @include('Components.comment')
        @endauth
    @endforeach
    <div class="flex justify-center mt-8">
        {{$tweets->links()}}
    </div>
@endsection
