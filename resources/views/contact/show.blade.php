<!-- resources/views/contact/show.blade.php -->
@extends('layouts.app')

@section('content')
<section class="py-20 bg-dark">
    <div class="container mx-auto">
        <h2 class="text-4xl font-sans text-light text-center mb-12">Contact Me</h2>
        <form action="/contact" method="POST" class="max-w-lg mx-auto bg-gray-800 p-8 rounded-lg">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-light">Name</label>
                <input type="text" name="name" id="name" class="w-full bg-gray-700 text-light p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-light">Email</label>
                <input type="email" name="email" id="email" class="w-full bg-gray-700 text-light p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-light">Message</label>
                <textarea name="message" id="message" rows="5" class="w-full bg-gray-700 text-light p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary transition duration-300"></textarea>
            </div>
            <button type="submit" class="bg-primary text-light py-3 px-6 rounded-lg hover:bg-orange-600 transition duration-300 transform hover:scale-105">Send Message</button>
        </form>
    </div>
</section>
@endsection
