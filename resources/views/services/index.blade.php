<!-- resources/views/services/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="py-20 bg-dark">
    <div class="container mx-auto">
        <h2 class="text-4xl font-sans text-light text-center mb-12">My Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-lg text-center hover:bg-gray-700 transition duration-300 transform hover:scale-105">
                <span class="text-5xl text-primary mb-4 inline-block">
                    <!-- Service icon here -->
                </span>
                <h3 class="text-xl font-serif text-light">Service Name</h3>
                <p class="text-secondary">Description of the service offered.</p>
            </div>
            <!-- Repeat for other services -->
        </div>
    </div>
</section>
@endsection
