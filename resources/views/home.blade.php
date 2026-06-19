@extends('layouts.app')

@section('content')

<div class="text-center py-20">

    <h1 class="text-4xl md:text-6xl font-bold leading-tight">
        We Build Smart Software Solutions for Businesses
    </h1>

    <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto">
        Nextsolutech helps companies grow through modern websites, mobile apps,
        and scalable digital systems.
    </p>

    <div class="mt-8 space-x-4">
        <a href="/services" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
            Our Services
        </a>

        <a href="/contact" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50">
            Contact Us
        </a>
    </div>

</div>
<!-- SERVICES PREVIEW -->
<div class="mt-20 grid md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-bold mb-2">Web Development</h3>
        <p class="text-gray-600">
            We build modern, responsive websites for businesses and organizations.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-bold mb-2">Mobile Apps</h3>
        <p class="text-gray-600">
            Android and iOS applications tailored to your business needs.
        </p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-bold mb-2">Software Solutions</h3>
        <p class="text-gray-600">
            Custom systems for automation, management, and digital transformation.
        </p>
    </div>

</div>
<!-- WHY CHOOSE US -->
<div class="mt-20 bg-gray-100 p-10 rounded-lg">

    <h2 class="text-3xl font-bold text-center mb-10">
        Why Choose Nextsolutech?
    </h2>

    <div class="grid md:grid-cols-3 gap-6 text-center">

        <div>
            <h3 class="font-bold text-lg">Reliable Systems</h3>
            <p class="text-gray-600 mt-2">
                We build stable and scalable software solutions.
            </p>
        </div>

        <div>
            <h3 class="font-bold text-lg">Modern Technology</h3>
            <p class="text-gray-600 mt-2">
                Using Laravel, Node.js, and modern frameworks.
            </p>
        </div>

        <div>
            <h3 class="font-bold text-lg">Business Focused</h3>
            <p class="text-gray-600 mt-2">
                We focus on solving real business problems.
            </p>
        </div>

    </div>

</div>
<!-- CTA SECTION -->
<div class="text-center mt-20 py-10">

    <h2 class="text-3xl font-bold">
        Ready to build your next project?
    </h2>

    <p class="text-gray-600 mt-3">
        Let’s work together to turn your idea into reality.
    </p>

    <a href="/contact"
       class="inline-block mt-6 bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700">
        Get Started
    </a>

</div>

@endsection