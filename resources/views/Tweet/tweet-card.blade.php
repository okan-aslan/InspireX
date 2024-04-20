<div class="mb-4">
    <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <div class="w-12 h-12 rounded-full bg-gray-300"></div>
            <div class="ml-4">
                <a href="{{route('users.show', $tweet->user->id)}}" class="font-bold underline">{{$tweet->user->name}}</a>
            </div>
        </div>
        <div class="text-gray-500">{{$tweet->created_at}}</div>
    </div>
    <div class="mt-4">
        <p class="text-lg">{{$tweet->content}}</p>
    </div>
    <div class="mt-4 flex justify-between items-center">
        <div>
            <button class="text-blue-500 hover:text-blue-700">Like</button>
            <span class="ml-2 text-gray-500">{{$tweet->likes}} Likes</span>
        </div>
        <div>
            <a href="{{ route('tweets.show', ['tweet' => $tweet->id]) }}" class="text-blue-500 hover:text-blue-700">View Tweet</a>
        </div>
    </div>
</div>
