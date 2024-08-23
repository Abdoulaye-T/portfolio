<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')

    <style>
        @keyframes fade-in-down {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes text-glow {
            0%, 100% {
                text-shadow: 0 0 10px rgba(255, 165, 0, 0.8), 0 0 20px rgba(255, 165, 0, 0.6);
            }
            50% {
                text-shadow: 0 0 20px rgba(255, 165, 0, 1), 0 0 30px rgba(255, 165, 0, 0.8);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 1s ease-out;
        }

        .animate-fade-in-up {
            animation: fade-in-up 1s ease-out;
        }

        .animate-text-glow {
            animation: text-glow 2s ease-in-out infinite alternate;
        }

        .animate-bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

    </style>
    <section class="h-screen flex flex-col justify-center items-center text-center">
        <h1 class="text-5xl font-sans text-light mb-4 animate-fade-in-down">
            Je m'appelle <span class="text-primary animate-text-glow">Abdoulaye</span>
        </h1>
        <p class="text-xl font-serif text-secondary mb-8 animate-fade-in-up">
            Un Développeur Fullstack Passionné.
        </p>
        <a href="#contact" class="bg-primary text-light py-3 px-6 rounded-lg hover:bg-orange-600 transition duration-500 ease-in-out transform hover:scale-105 animate-bounce">
            Contactez moi
        </a>
    </section>

@endsection
