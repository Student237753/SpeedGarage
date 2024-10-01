<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact - Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<!-- Header -->
@include('layouts.header')

<main class="container mx-auto mt-10 px-4 flex-grow">
    <h1 class="text-4xl font-bold mb-4">Contact Us</h1>

    <!-- Display success message -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Contact Form -->
    <form action="{{ route('contact.send') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full p-3 border rounded-lg" value="{{ old('name') }}">
            @error('name')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-3 border rounded-lg" value="{{ old('email') }}">
            @error('email')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message</label>
            <textarea name="message" id="message" rows="5" class="w-full p-3 border rounded-lg">{{ old('message') }}</textarea>
            @error('message')
            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Send Message</button>
    </form>
</main>

@include('layouts.footer')
</body>
</html>
