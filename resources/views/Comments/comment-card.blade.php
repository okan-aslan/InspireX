<div class="pt-4">
    <div class="comment border-t pt-4">
        <div class="flex items-center mt-2">
            <div class="w-8 h-8 rounded-full bg-gray-300"></div>
            <div class="ml-2">
                <div class="font-semibold">{{ $comment->user->name }}</div>
                <div class="text-gray-500">{{ $comment->updated_at }}</div>
            </div>
        </div>
        <p class="text-sm text-gray-700 mt-1">{{ $comment->content }}</p>
    </div>
</div>
