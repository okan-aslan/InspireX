@extends('layout.app')

@section('content')
    <div class="p-4 bg-gray-100 rounded-lg shadow-md mb-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h1>
            </div>
            @auth
                @if (Auth::id() === $user->id)
                    <div>
                        <a href="{{ route('users.edit', $user->id) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Edit
                            Profile</a>
                    </div>
                @endif
            @endauth
        </div>
        <hr class="my-4">
        <div>
            <h3 class="font-semibold text-gray-800">About :</h3>
            <p class="text-gray-600 mt-2">{{ $user->about }}</p>
        </div>
        <div class="flex justify-between items-center mt-6">
            <div>
                <p class="flex items-center text-gray-600"><i class="material-icons mr-1">people</i>100</p>
                <p class="flex items-center text-gray-600"><i
                        class="material-icons mr-1">create</i>{{ $user->tweets->count() }}</p>
                <p class="flex items-center text-gray-600"><i
                        class="material-icons mr-1">comment</i>{{ $user->comments->count() }}</p>
            </div>
        </div>
        @auth
            @if (Auth::id() !== $user->id)
                <div class="flex justify-end mt-4">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Follow</button>
                </div>
            @endif
        @endauth
    </div>
    @foreach ($tweets as $tweet)
        @include('Tweet.tweet-card')

        @foreach ($tweet->comments as $comment)
            @include('Comments.comment-card')
        @endforeach
    @endforeach
    <div class="flex justify-center mt-8">
        {{ $tweets->withQueryString()->links() }}
    </div>
@endsection
