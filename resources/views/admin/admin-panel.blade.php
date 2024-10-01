<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SpeedGarage - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
</head>
<body class="bg-gray-100">

<header class="bg-gray-900 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <h1 class="text-2xl font-bold"> SpeedGarage - Admin Panel</h1>
    </div>
</header>

<div class="container mx-auto mt-10 p-8 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold text-center mb-6">Dashboard</h2>

    <!-- Permissions Button -->
    <div class="flex justify-center">
        <a href="{{ route('permissions.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg">
            Manage Permissions
        </a>
    </div>

    <div class="flex justify-center">
        <a href="{{ route('roles.index') }}" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-3 px-6 rounded-lg">
            Manage Roles
        </a>
    </div>

    <div class="flex justify-center">
        <a href="{{ route('users.index') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg">
            Manage Users
        </a>
    </div>

</div>

</body>
</html>
