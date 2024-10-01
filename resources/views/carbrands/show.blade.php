<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $brand->brand }} - Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<main class="container mx-auto mt-10 px-4 flex-grow">
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">{{ $brand->brand }}</h1>
        <p class="text-lg text-gray-700">
            Welcome to the {{ $brand->brand }} page! Learn more about the {{ $brand->brand }} models and history.
        </p>

        <!-- Show Create Button if Authenticated -->
        @auth
            <div class="mt-8 space-y-4">
                <a href="{{ route('carbrands.create', ['brand' => $brand->brand]) }}" class="inline-block bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 transition duration-300">
                    Add a new {{ $brand->brand }} model
                </a>
            </div>
        @endauth

        <!-- Car Models List -->
        <div class="mt-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Available Models</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($models as $model)
                    <div class="bg-white shadow-md rounded-lg p-6 relative">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $model->model }}</h3>
                        <p class="text-gray-700 mb-1"><strong>Year:</strong> {{ $model->year_of_manufacture }}</p>
                        <p class="text-gray-700 mb-1"><strong>Odometer:</strong> {{ $model->odometer }} km</p>
                        <p class="text-gray-700 mb-1"><strong>Fuel Type:</strong> {{ $model->fuel_type }}</p>
                        @if($model->description)
                            <p class="text-gray-600 mt-2">{{ $model->description }}</p>
                        @endif

                        <!-- Show Edit and Delete Buttons if Authenticated -->
                        @auth
                            <!-- Edit Button -->
                            <a href="{{ route('carbrands.edit', ['brand' => $brand->brand, 'model' => $model->id]) }}" class="absolute top-2 left-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300">
                                Edit
                            </a>

                            <!-- Delete Form -->
                            <form action="{{ route('carbrands.destroy', ['brand' => $brand->brand, 'model' => $model->id]) }}" method="POST" class="absolute top-2 right-2">
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300"
                                    onclick="return confirm('Are you sure you want to delete {{ $model->model }} from {{ $brand->brand }}?');">
                                    Delete
                                </button>
                            </form>
                        @endauth
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
