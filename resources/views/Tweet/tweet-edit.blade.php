@extends('layout.app')

@section('content')
    <form action="{{ route('tweets.update', $tweet->id) }}" method="POST">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Error!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
                <textarea
                    class="mt-2 block w-full rounded-md bg-gray-200 border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50"
                    name="content" id="content" value="{{ $tweet->content }}">{{ $tweet->content }}</textarea>
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
