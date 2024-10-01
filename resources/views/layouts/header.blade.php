<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<header class="bg-gray-900 text-white">
    <div class="container mx-auto flex justify-between items-center p-4">
        <!-- Logo Image -->
        <div class="flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/turbo_logo.png') }}" alt="Speed Garage Logo" class="h-20 w-auto mr-3">
            </a>
            <span class="text-xl font-bold">Speed Garage</span>
        </div>

        <!-- Centered Welcome Message for Authenticated User -->
        @auth
            <div class="flex-1 text-center">
                <h1 class="font-bold text-xl">Welcome, {{ Auth::user()->name }}</h1>
            </div>
        @endauth

        <!-- Navigation Menu -->
        <nav>
            <ul class="flex space-x-6 items-center"> <!-- Added items-center here -->
                <li><a href="{{ route('home') }}" class="hover:text-blue-400 transition duration-300">Home</a></li>
                <li><a href="{{ route('carbrands') }}" class="hover:text-blue-400 transition duration-300">Car Brands</a></li>
                <li><a href="{{ route('about-us') }}" class="hover:text-blue-400 transition duration-300">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-blue-400 transition duration-300">Contact</a></li>

                <!-- Show "Admin" button if authenticated (logged in) -->
                @auth
                    <li>
                        <a href="{{ route('admin') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                            Admin Panel
                        </a>
                    </li>
                @endauth

                <!-- Show "Login" if guest (not logged in) -->
                @guest
                    <li>
                        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300">
                            Login
                        </a>
                    </li>
                @endguest

                <!-- Shows "Logout" if authenticated (logged in) -->
                @auth
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-6 rounded transition duration-300" onclick="return confirm(`Are you sure you want to logout?`)">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
