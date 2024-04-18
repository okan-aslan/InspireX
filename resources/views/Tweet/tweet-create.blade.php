<form action="{{ route('tweets.store') }}" method="POST">
    @csrf
    <div class="mb-8">
        <div class="flex items-start mb-2">
            <h1 class="text-xl font-semibold mt-2 mb-4 mr-4">Share your thoughts with the world!</h1>
        </div>
        <div class="tweet flex items-center mb-2">
            <textarea placeholder="What's on your mind?"
                class="border rounded-lg px-4 py-2 w-full focus:outline-none resize-none shadow-md" name="content" id="content"></textarea>
            <div class="flex items-center ml-2">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Tweet</button>
            </div>
        </div>
    </div>

</form>
