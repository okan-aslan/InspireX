@include('layout.header')

@include('layout.navbar')

<!-- Main Page -->
<div class="container mx-auto mt-8">
    <div class="flex gap-8">

        @include('layout.sidebar')
        <!-- Main Content -->
        <div class="w-1/2">
            <div class="bg-white rounded-lg shadow p-4">

                @yield('content')

            </div>
        </div>
        @include('layout.searchbar')
    </div>
</div>
</body>

</html>
