@extends('layout.app')

@section('content')
    @guest
        <div class="text-center mb-12">
            <h2 class="text-2xl font-semibold mb-4">Welcome to Twitter Clone!</h2>
            <p class="text-lg mb-4">Login or register to start sharing your thoughts with the world.</p>
            <div class="flex justify-center">
                <a href="{{ route('login') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full mr-4">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-full">Register</a>
            </div>
        </div>
    @endguest

    @auth
        @include('Tweet.tweet-create')
    @endauth

    @foreach ($tweets as $tweet)
        @include('Tweet.tweet-card')

        @auth
            @include('Comments.comment-store')
        @endauth

        @foreach ($tweet->comments as $comment)
            @include('Comments.comment-card')
        @endforeach

    @endforeach
    <div class="flex justify-center mt-8">
        {{ $tweets->withQueryString()->links() }}
    </div>
@endsection
