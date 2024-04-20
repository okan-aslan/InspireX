<div class="w-1/4">
    <h1 class="">Search thourgh tweets ...</h1>
    <form action="{{ route('dashboard.index') }}" method="GET">
        <div class="mt-4">
            <input name="search" value="{{ request('search', '') }}" type="text" placeholder="Search"
                class="border rounded-full px-4 py-2 w-full focus:outline-none">
        </div>
        <div class="mt-4">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full w-full">Search</button>
        </div>
    </form>
</div>
