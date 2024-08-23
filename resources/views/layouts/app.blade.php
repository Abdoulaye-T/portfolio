<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdoulaye.tech</title>
    <link rel="stylesheet" href="resources/css/style.css">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-white">
    <!-- Header -->
    <header class="flex justify-between items-center p-6 bg-gray-800 fixed top-0 left-0 w-full z-50">
        <div class="text-3xl font-bold bg-primary">A</div>
        <nav class="hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-orange-500 transition duration-300">Accueil</a></li>
                <li><a href="#about" class="hover:text-orange-500 transition duration-300">À propos</a></li>
                <li><a href="#skills" class="hover:text-orange-500 transition duration-300">Compétences</a></li>
                <li><a href="#portfolio" class="hover:text-orange-500 transition duration-300">Portfolio</a></li>
                <li><a href="#services" class="hover:text-orange-500 transition duration-300">Mes services</a></li>
                <li><a href="#contact" class="hover:text-orange-500 transition duration-300">Contact</a></li>
            </ul>
        </nav>
        <button id="menu-btn" class="md:hidden text-3xl focus:outline-none">
            ☰
        </button>
    </header>    

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-800 p-6">
        <ul class="space-y-4">
            <li><a href="/" class="block hover:text-orange-500 transition duration-300">Accueil</a></li>
            <li><a href="#about" class="block hover:text-orange-500 transition duration-300">À propos</a></li>
            <li><a href="#skills" class="block hover:text-orange-500 transition duration-300">Compétences</a></li>
            <li><a href="#portfolio" class="block hover:text-orange-500 transition duration-300">Portfolio</a></li>
            <li><a href="#services" class="block hover:text-orange-500 transition duration-300">Mes services</a></li>
            <li><a href="#contact" class="block hover:text-orange-500 transition duration-300">Contact</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <main>
        @yield('content')

        
      <!-- About Me Section -->
        <section class="py-20 bg-gray-700 flex flex-col md:flex-row items-center" id="about">
            <div class="md:w-1/3 text-center md:text-left mb-8 md:mb-0 px-4 animate-slide-in-left">
                <img src="" alt="Abdoulaye Traore" class="rounded-lg w-full h-auto transition-transform duration-500 transform hover:scale-105">
            </div>
            <div class="md:w-2/3 md:pl-12 px-4">
                <h2 class="text-4xl font-sans text-light mb-4 opacity-0 animate-fade-in">À propos de moi</h2>
                <p class="text-secondary mb-6 opacity-0 animate-fade-in delay-200">
                    Je m'appelle Abdoulaye Traore, un développeur passionné spécialisé dans le développement d'applications web. Je combine mes compétences en génie logiciel avec une forte passion pour la création de solutions efficaces et évolutives. Toujours à la recherche de nouveaux défis, je m'efforce d'apporter des idées innovantes à chaque projet sur lequel je travaille.
                </p>
                
                <!-- Download CV Button -->
                <div class="text-center md:text-left mt-8">
                    <a href="/path-to-cv.pdf" download class="bg-orange-500 hover:bg-orange-600 text-white py-3 px-8 rounded-lg transition duration-300 mx-auto md:mx-0 transform hover:scale-105 animate-scale-up delay-400">
                        Télécharger mon CV
                    </a>
                </div>
            </div>
        </section>


     <!-- Mes compétences -->
        <section class="py-20 bg-gray-800" id="skills">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-sans text-light text-center mb-12 opacity-0 animate-fade-in">Mes Compétences</h2>
                <div class="flex flex-wrap -mx-4 justify-center">
                    <!-- Exemple de compétence avec icône HTML -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-left delay-200">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-html5 text-6xl text-orange-500 mb-4"></i> <!-- Icône HTML -->
                            <h3 class="text-xl font-serif text-light">HTML</h3>
                        </div>
                    </div>
                    <!-- Exemple de compétence avec icône CSS -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-left delay-300">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-css3-alt text-6xl text-blue-500 mb-4"></i> <!-- Icône CSS -->
                            <h3 class="text-xl font-serif text-light">CSS</h3>
                        </div>
                    </div>
                    <!-- Exemple de compétence avec icône JS -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-left delay-400">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-js text-6xl text-yellow-500 mb-4"></i> <!-- Icône JS -->
                            <h3 class="text-xl font-serif text-light">JavaScript</h3>
                        </div>
                    </div>
                    <!-- Exemple de compétence avec icône React -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-500">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-react text-6xl text-blue-300 mb-4"></i> <!-- Icône React -->
                            <h3 class="text-xl font-serif text-light">React JS + React Native</h3>
                        </div>
                    </div>
                    {{-- mongo DB --}}
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-500">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fas fa-database text-6xl text-green-500 mb-4"></i> <!-- Icône MongoDB -->
                            <h3 class="text-xl font-serif text-light">MongoDB</h3>
                        </div>
                    </div>
                    {{-- node js --}}
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-700">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-node-js text-6xl text-green-400 mb-4"></i> <!-- Icône Node.js -->
                            <h3 class="text-xl font-serif text-light">Node.js</h3>
                        </div>
                    </div>
                    
                    <!-- Compétence PHP -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-600">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-php text-6xl text-indigo-500 mb-4"></i> <!-- Icône PHP -->
                            <h3 class="text-xl font-serif text-light">PHP</h3>
                        </div>
                    </div>
                    <!-- Compétence Laravel -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-700">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-laravel text-6xl text-red-500 mb-4"></i> <!-- Icône Laravel -->
                            <h3 class="text-xl font-serif text-light">Laravel</h3>
                        </div>
                    </div>
                    <!-- Compétence GitHub -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-800">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-github text-6xl text-white mb-4"></i> <!-- Icône GitHub -->
                            <h3 class="text-xl font-serif text-light">GitHub</h3>
                        </div>
                    </div>
                     <!-- Compétence Git -->
                     <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-1100">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-git-alt text-6xl text-orange-500 mb-4"></i> <!-- Icône Git -->
                            <h3 class="text-xl font-serif text-light">Git</h3>
                        </div>
                    </div>
                    <!-- Compétence Java -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-900">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-java text-6xl text-orange-600 mb-4"></i> <!-- Icône Java -->
                            <h3 class="text-xl font-serif text-light">Java</h3>
                        </div>
                    </div>
                    <!-- Compétence JEE -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-1000">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fas fa-cubes text-6xl text-teal-500 mb-4"></i> <!-- Icône JEE -->
                            <h3 class="text-xl font-serif text-light">JEE</h3>
                        </div>
                    </div>
                    <!-- Compétence Docker -->
                    <div class="w-full sm:w-1/3 lg:w-1/4 p-4 opacity-0 animate-slide-in-right delay-1100">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-300 transform hover:scale-105 text-center">
                            <i class="fab fa-docker text-6xl text-blue-400 mb-4"></i> <!-- Icône Docker -->
                            <h3 class="text-xl font-serif text-light">Docker</h3>
                        </div>
                    </div>
                    <!-- Ajoutez les autres compétences de la même manière -->
                </div>
            </div>
        </section>
                

       <!-- Mes projets -->
        <section class="py-20 bg-gray-800" id="portfolio">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-sans text-light text-center mb-12">Mon Portfolio</h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-gray-700 p-6 rounded-lg transition duration-300 transform hover:scale-105 relative group">
                            <img src="https://fileinfo.com/img/ss/xl/jpg_44-2.jpg" alt="Project Image" class="rounded-lg mb-4 w-full h-auto">
                            <h3 class="text-xl font-serif text-light">Project 1</h3>
                            <p class="text-secondary">Short description of the project.</p>
                            <!-- Icons hidden by default and shown on hover -->
                            <div class="absolute inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                                <a href="https://github.com/Abdoulaye-T/project1" target="_blank" class="text-light mx-2">
                                    <i class="fab fa-github"></i> <!-- GitHub Icon -->
                                </a>
                                <a href="https://your-demo-link.com/project1" target="_blank" class="text-light mx-2">
                                    <i class="fas fa-external-link-alt text-2xl"></i> <!-- Demo Link Icon -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-gray-700 p-6 rounded-lg transition duration-300 transform hover:scale-105 relative group">
                            <img src="https://via.placeholder.com/600x400" alt="Project Image" class="rounded-lg mb-4 w-full h-auto">
                            <h3 class="text-xl font-serif text-light">Project 1</h3>
                            <p class="text-secondary">Short description of the project.</p>
                            <!-- Icons hidden by default and shown on hover -->
                            <div class="absolute inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                                <a href="https://github.com/Abdoulaye-T/project1" target="_blank" class="text-light mx-2">
                                    <i class="fab fa-github"></i> <!-- GitHub Icon -->
                                </a>
                                <a href="https://your-demo-link.com/project1" target="_blank" class="text-light mx-2">
                                    <i class="fas fa-external-link-alt text-2xl"></i> <!-- Demo Link Icon -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-gray-700 p-6 rounded-lg transition duration-300 transform hover:scale-105 relative group">
                            <img src="https://via.placeholder.com/600x400" alt="Project Image" class="rounded-lg mb-4 w-full h-auto">
                            <h3 class="text-xl font-serif text-light">Project 1</h3>
                            <p class="text-secondary">Short description of the project.</p>
                            <!-- Icons hidden by default and shown on hover -->
                            <div class="absolute inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                                <a href="https://github.com/Abdoulaye-T/project1" target="_blank" class="text-light mx-2">
                                    <i class="fab fa-github"></i> <!-- GitHub Icon -->
                                </a>
                                <a href="https://your-demo-link.com/project1" target="_blank" class="text-light mx-2">
                                    <i class="fas fa-external-link-alt text-2xl"></i> <!-- Demo Link Icon -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-gray-700 p-6 rounded-lg transition duration-300 transform hover:scale-105 relative group">
                            <img src="https://via.placeholder.com/600x400" alt="Project Image" class="rounded-lg mb-4 w-full h-auto">
                            <h3 class="text-xl font-serif text-light">Project 1</h3>
                            <p class="text-secondary">Short description of the project.</p>
                            <!-- Icons hidden by default and shown on hover -->
                            <div class="absolute inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                                <a href="https://github.com/Abdoulaye-T/project1" target="_blank" class="text-light mx-2">
                                    <i class="fab fa-github"></i> <!-- GitHub Icon -->
                                </a>
                                <a href="https://your-demo-link.com/project1" target="_blank" class="text-light mx-2">
                                    <i class="fas fa-external-link-alt text-2xl"></i> <!-- Demo Link Icon -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4">
                        <div class="bg-gray-700 p-6 rounded-lg transition duration-300 transform hover:scale-105 relative group">
                            <img src="https://via.placeholder.com/600x400" alt="Project Image" class="rounded-lg mb-4 w-full h-auto">
                            <h3 class="text-xl font-serif text-light">Project 1</h3>
                            <p class="text-secondary">Short description of the project.</p>
                            <!-- Icons hidden by default and shown on hover -->
                            <div class="absolute inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                                <a href="https://github.com/Abdoulaye-T/project1" target="_blank" class="text-light mx-2">
                                    <i class="fab fa-github"></i> <!-- GitHub Icon -->
                                </a>
                                <a href="https://your-demo-link.com/project1" target="_blank" class="text-light mx-2">
                                    <i class="fas fa-external-link-alt text-2xl"></i> <!-- Demo Link Icon -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mes services -->
        <section class="py-20 bg-gray-800" id="services">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-sans text-light text-center mb-12">Mes Services</h2>
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4 opacity-0 transform translate-y-8 animate-fade-in">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-500 ease-in-out transform hover:scale-105">
                            <h3 class="text-xl font-serif text-light">Service 1</h3>
                            <p class="text-secondary">Description du service 1.</p>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4 opacity-0 transform translate-y-8 animate-fade-in delay-200">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-500 ease-in-out transform hover:scale-105">
                            <h3 class="text-xl font-serif text-light">Service 2</h3>
                            <p class="text-secondary">Description du service 2.</p>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-4 opacity-0 transform translate-y-8 animate-fade-in delay-400">
                        <div class="bg-gray-700 p-6 rounded-lg hover:bg-gray-600 transition duration-500 ease-in-out transform hover:scale-105">
                            <h3 class="text-xl font-serif text-light">Service 3</h3>
                            <p class="text-secondary">Description du service 3.</p>
                        </div>
                    </div>
                    <!-- Répète pour d'autres services -->
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section class="py-20 bg-gray-700" id="contact">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-sans text-light text-center mb-12">Contact Moi</h2>
                <div class="max-w-lg mx-auto">
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block text-secondary mb-2">Nom complet</label>
                            <input type="text" id="name" name="name" class="w-full p-3 rounded bg-gray-800 text-light focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-secondary mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-3 rounded bg-gray-800 text-light focus:outline-none focus:ring-2 focus:ring-orange-500">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-secondary mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full p-3 rounded bg-gray-800 text-light focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                        </div>
                        <button type="submit" class="w-full p-3 bg-orange-500 hover:bg-orange-600 rounded text-light transition duration-300">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 p-6 text-center">
        <div class="flex justify-center space-x-4 mb-4">
            <!-- Icônes des réseaux sociaux -->
            <a href="https://github.com/Abdoulaye-T" target="_blank" class="text-gray-500 hover:text-orange-500 transition duration-300">
                <!-- Icône GitHub -->
                <i class="fab fa-github text-2xl"></i>
            </a>
            <a href="https://linkedin.com/in/your-profile" target="_blank" class="text-gray-500 hover:text-orange-500 transition duration-300">
                <!-- Icône LinkedIn -->
                <i class="fab fa-linkedin text-2xl"></i>
            </a>
            <a href="https://twitter.com/your-profile" target="_blank" class="text-gray-500 hover:text-orange-500 transition duration-300">
                <!-- Icône Twitter -->
                <i class="fab fa-twitter text-2xl"></i>
            </a>
        </div>
        
        <p class="text-secondary">&copy; 2024 Abdoulaye Traore. All rights reserved.</p>
    </footer>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
