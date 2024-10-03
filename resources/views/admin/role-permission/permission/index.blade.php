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

<div class="container mx-auto mt-6 flex-grow">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Permissions List</h2>

        <!-- Create New Permission Button -->
        <div class="mb-4">
            <a href="{{ route('permissions.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Create New Permission
            </a>
        </div>

        <!-- Permissions Table -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b border-gray-300 text-left">ID</th>
                <th class="py-2 px-4 border-b border-gray-300 text-left">Permission Name</th>
                <th class="py-2 px-4 border-b border-gray-300 text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($permissions as $permission)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $permission->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $permission->name }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded-lg">
                            Edit
                        </a>
                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-3 rounded-lg" onclick="return confirm('Are you sure you want to delete this permission?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @if($permissions->isEmpty())
            <p class="text-gray-500 text-center mt-4">No permissions found.</p>
        @endif
    </div>
</div>

<!-- Footer -->
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
