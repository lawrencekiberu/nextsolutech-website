@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="text-center py-24 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
    <h1 class="text-5xl font-bold mb-4">
        We Build Modern Software That Powers Businesses
    </h1>
    <p class="text-lg mb-6">
        Web platforms, mobile apps, and enterprise systems built for growth.
    </p>

    <a href="/contact" class="bg-white text-blue-600 px-6 py-3 rounded font-bold">
        Get In Touch
    </a>
</section>
<!--Services -->

<section class="py-20 text-center">
    <h2 class="text-4xl font-bold mb-12">Our Services</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-10">

        <div class="bg-white p-8 shadow rounded hover:shadow-lg">
            <h3 class="font-bold text-xl mb-2">Web Development</h3>
            <p>Modern, responsive websites and web applications.</p>
        </div>

        <div class="bg-white p-8 shadow rounded hover:shadow-lg">
            <h3 class="font-bold text-xl mb-2">Mobile Apps</h3>
            <p>Android and iOS applications built for performance.</p>
        </div>

        <div class="bg-white p-8 shadow rounded hover:shadow-lg">
            <h3 class="font-bold text-xl mb-2">Business Systems</h3>
            <p>Custom systems for automation and business growth.</p>
        </div>

    </div>
</section>

@endsection