<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us - Speed Garage</title>
    <link rel="icon" href="{{ asset('assets/turbo_logo.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

<!-- Header -->
@include('layouts.header')

<!-- About Us Section -->
<section class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold text-gray-900 mb-6">About Speed Garage</h1>
        <p class="text-xl text-gray-600">
            Welcome to Speed Garage – your ultimate destination for luxury, performance, and passion for cars. Our mission is to bring you the best selection of premium vehicles from around the world.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Our Mission -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4">Our Mission</h2>
            <p class="text-lg text-gray-600">
                At Speed Garage, our goal is to offer top-of-the-line vehicles, providing an exceptional buying experience to car enthusiasts. We believe that every car should offer an extraordinary driving experience, and we go the extra mile to bring you the best.
            </p>
        </div>

        <!-- Our Story -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4">Our Story</h2>
            <p class="text-lg text-gray-600">
                Speed Garage was founded by a group of car enthusiasts who wanted to share their passion for premium and performance vehicles. Over the years, we've built relationships with leading manufacturers and established ourselves as a trusted name in the automotive industry.
            </p>
        </div>

        <!-- Why Choose Us -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4">Why Choose Us?</h2>
            <ul class="list-disc list-inside text-lg text-gray-600">
                <li>Exclusive range of high-end cars</li>
                <li>Personalized customer service</li>
                <li>Expert advice and knowledge</li>
                <li>Comprehensive after-sales support</li>
            </ul>
        </div>

        <!-- Our Brands -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <h2 class="text-3xl font-semibold text-gray-900 mb-4">Our Brands</h2>
            <p class="text-lg text-gray-600">
                We work with world-renowned brands, including Mercedes, Audi, Volkswagen, BMW, Ferrari, Lamborghini, Bugatti, and Porsche, to bring you the latest models and timeless classics.
            </p>
        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')

</body>
</html>
