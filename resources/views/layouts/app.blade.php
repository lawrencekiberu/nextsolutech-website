<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextsolutech Software Solutions Company</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between">
        <h1 class="font-bold text-xl">Nextsolutech Software Solutions Company</h1>

        <div class="space-x-4">
    <a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-bold' : '' }}">Home</a>
    <a href="/about" class="{{ request()->is('about') ? 'text-blue-600 font-bold' : '' }}">About</a>
    <a href="/services" class="{{ request()->is('services') ? 'text-blue-600 font-bold' : '' }}">Services</a>
    <a href="/contact" class="{{ request()->is('contact') ? 'text-blue-600 font-bold' : '' }}">Contact</a>
</div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center p-6 bg-gray-800 text-white mt-10">
        &copy; 2026 Nextsolutech Software Solutions Company
    </footer>

</body>
</html>