<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

<!-- Header -->
@include('layouts.header')

<!-- Main Content -->
<section class="relative h-screen text-center">
    <!-- Background Video -->
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
        <source src="{{ asset('assets/background-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Overlay for darkening the video background -->
    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>

    <!-- Content Over the Video -->
    <div class="relative z-20 flex items-center justify-center h-full">
        <div class="text-white">
            <main class="container mx-auto px-4">
                <div class="bg-white bg-opacity-80 rounded-lg shadow-lg p-10 max-w-2xl mx-auto text-center mt-10">
                    <h1 class="text-5xl font-bold text-gray-900 mb-4">Welcome to Speed Garage!</h1>
                    <p class="text-lg text-gray-700 mb-6">
                        At Speed Garage, we offer a wide selection of premium car brands, including Mercedes, Audi, Volkswagen, BMW, Ferrari, Lamborghini, Bugatti, and Porsche. Whatever you're looking for, we've got the right car for you!
                    </p>
                    <p class="text-lg text-gray-700">
                        Explore our collection of luxury and performance vehicles and see why Speed Garage is the best choice for car enthusiasts. Your dream car is just a visit away!
                    </p>
                </div>
            </main>
            <a href="{{ route('carbrands') }}" class="mt-6 inline-block bg-yellow-500 text-white px-6 py-3 rounded-lg">Browse Cars</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    @include("layouts.footer")
</footer>

</body>
</html>
