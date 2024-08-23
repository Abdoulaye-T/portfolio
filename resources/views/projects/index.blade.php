<!-- resources/views/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="py-20 bg-dark">
    <div class="container mx-auto">
        <h2 class="text-4xl font-sans text-light text-center mb-12">My Portfolio</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-lg hover:bg-gray-700 transition duration-300 transform hover:scale-105">
                <img src="/path-to-image.jpg" alt="Project Image" class="rounded-lg mb-4">
                <h3 class="text-xl font-serif text-light">Project Name</h3>
                <p class="text-secondary">Short description of the project.</p>
            </div>
            <!-- Repeat for other projects -->
        </div>
    </div>
</section>
@endsection
