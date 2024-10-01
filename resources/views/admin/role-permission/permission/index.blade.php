<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Permissions</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">
@include('layouts.header')
<div class="container mx-auto">
    <!-- Form for Permission    Creation -->
    <div class="mt-6 bg-white p-6 rounded-lg shadow-lg">
        <form action="{{ route('permissions.store') }}" method="POST">
            @csrf

            <!-- Permission Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Permission Name:</label>
                <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Description Input -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                <input type="text" name="description" id="description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Button Controls -->
            <div class="flex justify-between">
                <!-- Back Button -->
                <a href="{{ route('home') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg">
                    Back
                </a>

                <!-- Create Permission Button -->
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Create Permission
                </button>
            </div>
        </form>
    </div>
</div>
@include('layouts.footer')
</body>
</html>
