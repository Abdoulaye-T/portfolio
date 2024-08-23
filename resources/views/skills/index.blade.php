<!-- resources/views/experiences/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="py-20 bg-dark">
    <div class="container mx-auto">
        <h2 class="text-4xl font-sans text-light text-center mb-12">My Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-serif text-light">Laravel</h3>
                <div class="w-full bg-gray-700 rounded-full h-4 mb-4">
                    <div class="bg-primary h-4 rounded-full" style="width: 90%;"></div>
                </div>
            </div>
            <!-- Repeat for other skills -->
        </div>
    </div>
</section>
@endsection
