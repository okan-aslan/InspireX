<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="#" class="text-white font-bold text-lg">Twitter Clone</a>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Login</button>
                <button class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Register</button>
                <button class="bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full">Profile</button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-8">
        <div class="flex gap-8">
            <!-- Sidebar -->
            <div class="w-1/4">
                <div class="bg-white rounded-lg shadow p-4">
                    <ul>
                        <li><a href="#" class="block p-4 hover:bg-gray-200">Home</a></li>
                        <li><a href="#" class="block p-4 hover:bg-gray-200">Terms</a></li>
                        <li><a href="#" class="block p-4 hover:bg-gray-200">Support</a></li>
                        <li><a href="#" class="block p-4 hover:bg-gray-200">View Profile</a></li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-1/2">
                <!-- Main Content -->
                <div class="bg-white rounded-lg shadow p-4">
                    <!-- Sample Tweet -->
                    <div class="mb-8">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 rounded-full bg-gray-300"></div>
                                <div class="ml-4">
                                    <div class="font-bold">John Doe</div>
                                    <div class="text-gray-500">@johndoe</div>
                                </div>
                            </div>
                            <div class="text-gray-500">Apr 18, 2024</div>
                        </div>
                        <div class="mt-4">
                            <p class="text-lg">This is a sample tweet! 🚀</p>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                            <div>
                                <button class="text-blue-500 hover:text-blue-700">Like</button>
                                <span class="ml-2 text-gray-500">10 Likes</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Sample Tweet -->

                    <!-- Write Comment -->
                    <div class="mb-8">
                        <div class="comment flex items-center mb-2">
                            <textarea placeholder="Write your comment" class="border rounded-full px-4 py-2 w-full focus:outline-none resize-none"></textarea>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-2 rounded-full ml-2">Post</button>
                        </div>
                    </div>
                    <!-- End Write Comment -->

                    <!-- Comments -->
                    <div class="pt-4">
                        <!-- Sample Comment 1 -->
                        <div class="comment border-t pt-4">
                            <div class="flex items-center mt-2">
                                <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                                <div class="ml-2">
                                    <div class="font-semibold">Commenter Name</div>
                                    <div class="text-gray-500">Apr 19, 2024</div>
                                </div>
                            </div>
                            <p class="text-sm text-gray-700 mt-1">This is a sample comment!</p>
                        </div>
                        <!-- End Sample Comment 1 -->
                    </div>
                    <!-- End Comments -->
                </div>
            </div>
            <!-- End Main Content -->

            <!-- Right Sidebar -->
            <div class="w-1/4">
                <div class="bg-white rounded-lg shadow p-4">
                    <h2 class="font-bold mb-4">Register Users</h2>
                    <!-- Sample Registered Users -->
                    <ul>
                        <li class="flex items-center mb-2">
                            <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                            <div class="ml-2">Jane Doe</div>
                        </li>
                        <li class="flex items-center mb-2">
                            <div class="w-8 h-8 rounded-full bg-gray-300"></div>
                            <div class="ml-2">Bob Smith</div>
                        </li>
                        <!-- Add more users here -->
                    </ul>
                    <!-- End Sample Registered Users -->

                    <!-- Search Input -->
                    <div class="mt-4">
                        <input type="text" placeholder="Search" class="border rounded-full px-4 py-2 w-full focus:outline-none">
                    </div>
                    <!-- End Search Input -->

                    <!-- Search Button -->
                    <div class="mt-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full w-full">Search</button>
                    </div>
                    <!-- End Search Button -->
                </div>
            </div>
            <!-- End Right Sidebar -->
        </div>
    </div>
</body>

</html>
