@extends('layout.app')

@section('content')
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-4 bg-gray-100 rounded-lg shadow-md">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h1>
                </div>
                @auth
                    @if (Auth::id() === $user->id)
                        <div>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-full">
                                Save
                                Profile</button>
                        </div>
                    @endif
                @endauth
            </div>
            <hr class="my-4">
            <div>
                <h3 class="font-semibold text-gray-800">About :</h3>
                <textarea name="about" id="about"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">{{ $user->about }}</textarea>
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
        </div>
    </form>
@endsection
