<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <a href="/" class="text-white font-bold text-lg">{{config('app.name')}}</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{route('login')}}"  class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Login</a>
            <a href="{{route('register')}}"  class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Register</a>
            <a href="#"  class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Profile</a>
        </div>
    </div>
</nav>
