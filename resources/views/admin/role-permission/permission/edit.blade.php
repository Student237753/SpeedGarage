<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Permission</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-6">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Permission Name:</label>
                <input type="text" name="name" id="name" value="{{ $permission->name }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none" required>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('permissions.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg">Back</a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Update Permission</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
