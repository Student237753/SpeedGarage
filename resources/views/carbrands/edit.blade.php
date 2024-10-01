<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit {{ $model->model }} - Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<main class="container mx-auto mt-10 px-4 flex-grow">
    <section class="flex justify-center items-center min-h-screen">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
            <h1 class="text-4xl font-bold text-gray-900 mb-8 text-center">Edit {{ $model->model }} - {{ $brand }}</h1>

            <form action="{{ route('carbrands.update', ['brand' => $brand, 'model' => $model->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="model" class="block text-gray-700">Model Name:</label>
                    <input type="text" name="model" id="model" class="w-full border border-gray-300 rounded p-2" value="{{ old('model', $model->model) }}" required>
                </div>
                <div class="mb-4">
                    <label for="year_of_manufacture" class="block text-gray-700">Year of Manufacture:</label>
                    <input type="number" name="year_of_manufacture" id="year_of_manufacture" class="w-full border border-gray-300 rounded p-2" value="{{ old('year_of_manufacture', $model->year_of_manufacture) }}" min="1900" max="{{ date('Y') }}" required>
                </div>
                <div class="mb-4">
                    <label for="odometer" class="block text-gray-700">Odometer (km):</label>
                    <input type="number" name="odometer" id="odometer" class="w-full border border-gray-300 rounded p-2" value="{{ old('odometer', $model->odometer) }}" required>
                </div>
                <div class="mb-4">
                    <label for="fuel_type" class="block text-gray-700">Fuel Type:</label>
                    <select name="fuel_type" id="fuel_type" class="w-full border border-gray-300 rounded p-2" required>
                        <option value="petrol" {{ old('fuel_type', $model->fuel_type) == 'petrol' ? 'selected' : '' }}>Petrol</option>
                        <option value="diesel" {{ old('fuel_type', $model->fuel_type) == 'diesel' ? 'selected' : '' }}>Diesel</option>
                        <option value="electric" {{ old('fuel_type', $model->fuel_type) == 'electric' ? 'selected' : '' }}>Electric</option>
                        <option value="hybrid" {{ old('fuel_type', $model->fuel_type) == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description (optional):</label>
                    <textarea name="description" id="description" class="w-full border border-gray-300 rounded p-2">{{ old('description', $model->description) }}</textarea>
                </div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300">Update Model</button>
            </form>
        </div>
    </section>
</main>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
