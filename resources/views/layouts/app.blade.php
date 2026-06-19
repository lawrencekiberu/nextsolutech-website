<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextsolutech</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

        <div class="text-2xl font-bold text-blue-600">
            Nextsolutech
        </div>

        <div class="space-x-6 hidden md:block">
            <a href="/" class="hover:text-blue-600">Home</a>
            <a href="/about" class="hover:text-blue-600">About</a>
            <a href="/services" class="hover:text-blue-600">Services</a>
            <a href="/contact" class="hover:text-blue-600">Contact</a>
        </div>

    </div>
</nav>

<!-- PAGE CONTENT -->
<main class="max-w-6xl mx-auto px-4 py-10">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-white border-t mt-10">
    <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm text-gray-500">
        © {{ date('Y') }} Nextsolutech. All rights reserved.
    </div>
</footer>

</body>
</html>