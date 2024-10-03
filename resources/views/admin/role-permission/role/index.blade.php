<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<header>
    @include('layouts.header')
</header>

<!-- Main content with flex-grow to take available space -->
<div class="container mx-auto mt-6 flex-grow">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Roles List</h2>

        <div class="mb-4">
            <a href="{{ route('roles.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Create Role</a>
        </div>

        <table class="table-auto w-full">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td class="border px-4 py-2">{{ $role->id }}</td>
                    <td class="border px-4 py-2">{{ $role->name }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('roles.edit', $role->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-1 px-3 rounded">Edit</a>
                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded">Delete</button>
                        </form>
                        <!-- Add / Edit Role Permission Button -->
                        <a href="{{ route('roles-permissions', $role->id) }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg">
                            Add / Edit Role Permission
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($roles->isEmpty())
            <p class="text-gray-500 text-center mt-4">No roles found.</p>
        @endif
    </div>
</div>

<!-- Footer -->
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
