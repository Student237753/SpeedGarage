<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Brands - Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<main class="container mx-auto mt-10 px-4 flex-grow">
    <section class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Explore Car Brands</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Mercedes -->
            <a href="{{ route('carbrands.show', ['brand' => 'mercedes']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/mercedes-logo.png') }}" alt="Mercedes" class="w-full h-64 object-contain">
            </a>
            <!-- audi -->
            <a href="{{ route('carbrands.show', ['brand' => 'audi']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/audi-logo.png') }}" alt="Audi" class="w-full h-64 object-contain">
            </a>
            <!-- BMW -->
            <a href="{{ route('carbrands.show', ['brand' => 'bmw']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/bmw-logo.png') }}" alt="BMW" class="w-full h-64 object-contain">
            </a>
            <!-- Volkswagen -->
            <a href="{{ route('carbrands.show', ['brand' => 'volkswagen']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/volkswagen-logo.png') }}" alt="Volkswagen" class="w-full h-64 object-contain">
            </a>
            <!-- Lamborghini -->
            <a href="{{ route('carbrands.show', ['brand' => 'lamborghini']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/lamborghini-logo.png') }}" alt="Lamborghini" class="w-full h-64 object-contain">
            </a>
            <!-- Ferrari -->
            <a href="{{ route('carbrands.show', ['brand' => 'ferrari']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/ferrari-logo.png') }}" alt="Ferrari" class="w-full h-64 object-contain">
            </a>
            <!-- Porsche -->
            <a href="{{ route('carbrands.show', ['brand' => 'porsche']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/porsche-logo.png') }}" alt="Porsche" class="w-full h-64 object-contain">
            </a>
            <!-- Bugatti -->
            <a href="{{ route('carbrands.show', ['brand' => 'bugatti']) }}" class="block hover:shadow-lg transition duration-300">
                <img src="{{ asset('assets/bugatti-logo.png') }}" alt="Bugatti" class="w-full h-64 object-contain">
            </a>
        </div>
    </section>
</main>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
