@extends('layout.app')

@section('content')
    <form action="{{ route('tweets.update', $tweet->id) }}" method="POST">
        @csrf
        @method('PUT')
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
                <input class="text-lg border-2" name="content" id="content" value="{{ $tweet->content }}"></input>
            </div>
            <div class="mt-4 flex justify-between items-center">
                <div>
                    <button class="text-blue-500 hover:text-blue-700">Like</button>
                    <span class="ml-2 text-gray-500">{{ $tweet->likes }} Likes</span>
                </div>
                <div>
                    <button class="text-green-500 hover:text-green-700">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
