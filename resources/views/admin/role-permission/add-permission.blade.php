<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Role Permissions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-6">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Add / Edit Permissions for Role: {{ $role->name }}</h2>

        <form action="{{ route('roles-permissions.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Use PUT method -->

            @foreach($permissions as $permission)
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                               @if($role->permissions->contains($permission->id)) checked @endif
                               class="form-checkbox text-blue-600">
                        <span class="ml-2">{{ $permission->name }}</span>
                    </label>
                </div>
            @endforeach

            <div class="mt-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Update Permissions
                </button>
                <a href="{{ route('roles.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg ml-4">Back</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
