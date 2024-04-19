<div class="p-4 mb-8 bg-white">
    <div class="comment pt-4">
        <div class="flex items-center mt-2">
            <div class="w-8 h-8 rounded-full bg-gray-300"></div>
            <div class="ml-2">
                <div class="font-semibold text-gray-700">{{ $comment->user->name }}</div>
                <div class="text-gray-500">{{ $comment->updated_at }}</div>
            </div>
            @auth
                @if (auth()->user()->id === $comment->user_id)
                    <form action="{{ route('comments.destroy', ['comment' => $comment->id]) }}" method="POST" class="ml-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                @endif
            @endauth
        </div>
        <p class="text-sm text-gray-700">{{ $comment->content }}</p>
    </div>
</div>
