@extends('layout.app')

@section('content')
    <div class="mb-8">
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-gray-300"></div>
                <div class="ml-4">
                    <div class="font-bold">{{ $tweet->user->name }}</div>
                    <div class="text-gray-500">@johndoe</div>
                </div>
            </div>
            <div class="text-gray-500">{{ $tweet->created_at }}</div>
        </div>
        <div class="mt-4">
            <p class="text-lg">{{ $tweet->content }}</p>
        </div>
        <div class="mt-4 flex justify-between items-center">
            <div>
                <button class="text-blue-500 hover:text-blue-700">Like</button>
                <span class="ml-2 text-gray-500">{{ $tweet->likes }} Likes</span>
            </div>
            @auth
                <div>
                    <a href="{{ route('tweets.edit', ['tweet' => $tweet->id]) }}"
                        class="text-green-500 hover:text-green-700">Edit
                        Tweet</a>
                    <form action="{{ route('tweets.destroy', $tweet->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="border-2 text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
@endsection
