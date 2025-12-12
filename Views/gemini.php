<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie de ScrumLand</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts: Serif for titles to give "Sud de la France" vibe -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        terracotta: {
                            50: '#fffaf0',
                            100: '#fbd38d',
                            200: '#f6ad55',
                            500: '#dd6b20',
                            600: '#c05621', // Primary brand color
                            700: '#9c4221',
                            800: '#7b341e',
                        }
                    },
                    fontFamily: {
                        sans: ['"Open Sans"', 'sans-serif'],
                        serif: ['"Merriweather"', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Animation Classes */
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Utility to hide pages */
        .page-content {
            display: none;
        }
        
        .page-content.active {
            display: block;
        }
    </style>
</head>
<body class="bg-stone-50 text-gray-800 flex flex-col min-h-screen">

    <!-- HEADER -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <!-- Emergency Banner (US_ID 2) -->
        <div class="bg-red-600 text-white text-sm py-2 px-4 flex justify-between items-center">
            <span class="flex items-center font-bold animate-pulse">
                <i data-lucide="alert-circle" class="w-4 h-4 mr-2"></i> Numéro d'urgence : 04 99 99 99 99
            </span>
            <div class="flex space-x-4 text-xs md:text-sm">
                <button onclick="changeLang('fr')" class="font-bold underline hover:text-gray-200">FR</button>
                <button onclick="changeLang('en')" class="font-bold opacity-70 hover:opacity-100">EN</button>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo (US_ID 1) -->
                <div class="flex items-center cursor-pointer group" onclick="showPage('home')">
                    <div class="w-10 h-10 bg-terracotta-600 rounded-lg flex items-center justify-center text-white mr-3 shadow-sm group-hover:bg-terracotta-700 transition">
                        <span class="font-serif text-2xl font-bold">S</span>
                    </div>
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-800 leading-none tracking-tight">MAIRIE DE</h1>
                        <h2 class="text-sm md:text-lg text-terracotta-600 font-serif font-medium leading-none tracking-widest">SCRUMLAND</h2>
                    </div>
                </div>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex space-x-1">
                    <button onclick="showPage('home')" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-terracotta-800 bg-terracotta-100 transition-colors" data-target="home">Accueil</button>
                    <button onclick="showPage('admin')" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors" data-target="admin">Ma Mairie</button>
                    <button onclick="showPage('culture')" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors" data-target="culture">Découvrir</button>
                    <button onclick="showPage('life')" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors" data-target="life">Vivre ici</button>
                    <button onclick="showPage('contact')" class="nav-link px-4 py-2 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-100 hover:text-gray-900 transition-colors" data-target="contact">Contact</button>
                </nav>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button onclick="toggleMobileMenu()" class="p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none">
                        <i data-lucide="menu" id="menu-icon" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Nav -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <button onclick="showPage('home'); toggleMobileMenu()" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-terracotta-50 hover:text-terracotta-800 text-gray-700">Accueil</button>
                <button onclick="showPage('admin'); toggleMobileMenu()" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-terracotta-50 hover:text-terracotta-800 text-gray-700">Ma Mairie</button>
                <button onclick="showPage('culture'); toggleMobileMenu()" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-terracotta-50 hover:text-terracotta-800 text-gray-700">Découvrir</button>
                <button onclick="showPage('life'); toggleMobileMenu()" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-terracotta-50 hover:text-terracotta-800 text-gray-700">Vivre ici</button>
                <button onclick="showPage('contact'); toggleMobileMenu()" class="block w-full text-left px-3 py-2 rounded-md text-base font-medium hover:bg-terracotta-50 hover:text-terracotta-800 text-gray-700">Contact</button>
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">

        <!-- PAGE: HOME -->
        <div id="page-home" class="page-content active fade-in">
            <!-- Hero -->
            <div class="relative h-96 rounded-2xl overflow-hidden shadow-xl group mb-12">
                <img src="https://images.unsplash.com/photo-1499678329028-101435549a4e?auto=format&fit=crop&q=80&w=1200" alt="ScrumLand Vue" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-8 text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-2 font-serif">Bienvenue à ScrumLand</h1>
                    <p class="text-xl opacity-90">Douceur de vivre au sud de la France</p>
                </div>
            </div>

            <!-- Presentation (US_ID 3) -->
            <section class="grid md:grid-cols-2 gap-8 items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-terracotta-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Présentation de la ville</h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        Bienvenue à ScrumLand, charmante petite ville située au cœur du sud de la France. Entre patrimoine historique et dynamisme moderne, nous cultivons l'art de vivre ensemble.
                        Nichée entre vignes et oliviers, ScrumLand offre un cadre de vie exceptionnel.
                    </p>
                    <button onclick="showPage('culture')" class="text-terracotta-600 font-semibold hover:text-terracotta-800 flex items-center">
                        En savoir plus sur notre histoire <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i>
                    </button>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1559563362-c667ba5f5480?auto=format&fit=crop&q=80&w=300&h=200" alt="Ruelle" class="rounded-lg shadow-md w-full h-full object-cover">
                    <img src="https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&q=80&w=300&h=200" alt="Marché" class="rounded-lg shadow-md mt-8 w-full h-full object-cover">
                </div>
            </section>

            <!-- News (US_ID 4) -->
            <section class="mb-12">
                <div class="flex justify-between items-end mb-6">
                    <h2 class="text-3xl font-bold text-terracotta-800 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Actualités</h2>
                    <button class="text-sm font-semibold text-blue-600 hover:underline">Toutes les actus</button>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- News Item 1 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow border-t-4 border-terracotta-500">
                        <div class="flex items-center mb-4">
                            <i data-lucide="file-text" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                            <h3 class="text-xl font-bold text-gray-800">Festival des Arts</h3>
                        </div>
                        <span class="text-xs font-bold text-terracotta-500 uppercase tracking-wide">Culture • 12 Octobre</span>
                        <p class="mt-2 text-sm text-gray-600">Venez découvrir les artistes locaux sur la place du village.</p>
                    </div>
                    <!-- News Item 2 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow border-t-4 border-terracotta-500">
                        <div class="flex items-center mb-4">
                            <i data-lucide="file-text" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                            <h3 class="text-xl font-bold text-gray-800">Inscriptions Cantine</h3>
                        </div>
                        <span class="text-xs font-bold text-terracotta-500 uppercase tracking-wide">Scolaire • 05 Octobre</span>
                        <p class="mt-2 text-sm text-gray-600">Les inscriptions pour le 2ème trimestre sont ouvertes via le portail famille.</p>
                    </div>
                    <!-- News Item 3 -->
                    <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow border-t-4 border-terracotta-500">
                        <div class="flex items-center mb-4">
                            <i data-lucide="file-text" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                            <h3 class="text-xl font-bold text-gray-800">Conseil Municipal</h3>
                        </div>
                        <span class="text-xs font-bold text-terracotta-500 uppercase tracking-wide">Mairie • 28 Septembre</span>
                        <p class="mt-2 text-sm text-gray-600">Compte rendu du dernier conseil municipal disponible en ligne.</p>
                    </div>
                </div>
            </section>

            <!-- Quick Links -->
            <section class="bg-orange-50 p-8 rounded-2xl">
                <h3 class="text-2xl font-bold text-center text-gray-800 mb-8 font-serif">Accès Rapide</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button onclick="showPage('life')" class="p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition text-center flex flex-col items-center gap-2">
                        <i data-lucide="utensils" class="w-8 h-8 text-green-600"></i>
                        <span class="font-semibold">Menus Cantine</span>
                    </button>
                    <button onclick="showPage('admin')" class="p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition text-center flex flex-col items-center gap-2">
                        <i data-lucide="file-text" class="w-8 h-8 text-blue-600"></i>
                        <span class="font-semibold">Démarches</span>
                    </button>
                    <button onclick="showPage('life')" class="p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition text-center flex flex-col items-center gap-2">
                        <i data-lucide="calendar" class="w-8 h-8 text-purple-600"></i>
                        <span class="font-semibold">Agenda</span>
                    </button>
                    <button onclick="showPage('contact')" class="p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition text-center flex flex-col items-center gap-2">
                        <i data-lucide="map-pin" class="w-8 h-8 text-red-600"></i>
                        <span class="font-semibold">Signaler un incident</span>
                    </button>
                </div>
            </section>
        </div>

        <!-- PAGE: ADMIN (Ma Mairie) -->
        <div id="page-admin" class="page-content fade-in">
            <h2 class="text-3xl font-bold text-terracotta-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Ma Mairie</h2>

            <!-- Elus (US_ID 9) -->
            <section class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Vos Élus</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded-xl shadow flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=150&h=150" alt="Maire" class="w-16 h-16 rounded-full object-cover border-2 border-terracotta-200">
                        <div>
                            <p class="font-bold text-lg">Jean Agile</p>
                            <p class="text-sm text-gray-500">Maire</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=150&h=150" alt="Adjointe" class="w-16 h-16 rounded-full object-cover border-2 border-terracotta-200">
                        <div>
                            <p class="font-bold text-lg">Marie Kanban</p>
                            <p class="text-sm text-gray-500">1ère Adjointe</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow flex items-center space-x-4">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150&h=150" alt="Conseiller" class="w-16 h-16 rounded-full object-cover border-2 border-terracotta-200">
                        <div>
                            <p class="font-bold text-lg">Pierre Sprint</p>
                            <p class="text-sm text-gray-500">Conseiller Culture</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Démarches (US_ID 12) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500 md:col-span-2">
                    <div class="flex items-center mb-4">
                        <i data-lucide="file-text" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Démarches Administratives</h3>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <button class="p-3 bg-gray-50 hover:bg-gray-100 rounded text-left flex justify-between items-center transition">
                            <span>État Civil (Naissance, Mariage)</span> <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                        <button class="p-3 bg-gray-50 hover:bg-gray-100 rounded text-left flex justify-between items-center transition">
                            <span>Urbanisme & Permis</span> <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                        <button class="p-3 bg-gray-50 hover:bg-gray-100 rounded text-left flex justify-between items-center transition">
                            <span>Inscriptions Électorales</span> <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                        <button class="p-3 bg-gray-50 hover:bg-gray-100 rounded text-left flex justify-between items-center transition">
                            <span>Recensement Citoyen</span> <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <!-- Bulletins (US_ID 10) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="file-text" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Bulletins Municipaux</h3>
                    </div>
                    <ul class="space-y-2">
                        <li class="flex justify-between items-center border-b pb-2">
                            <span>Septembre 2024</span> <a href="#" class="text-blue-600 text-sm hover:underline">Télécharger PDF</a>
                        </li>
                        <li class="flex justify-between items-center border-b pb-2">
                            <span>Juin 2024</span> <a href="#" class="text-blue-600 text-sm hover:underline">Télécharger PDF</a>
                        </li>
                        <li class="flex justify-between items-center">
                            <span>Mars 2024</span> <a href="#" class="text-blue-600 text-sm hover:underline">Télécharger PDF</a>
                        </li>
                    </ul>
                </div>

                <!-- Salles (US_ID 11) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="calendar" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Location de Salles</h3>
                    </div>
                    <p class="mb-4 text-sm text-gray-600">Réservez la salle des fêtes ou la salle polyvalente pour vos événements.</p>
                    <button class="w-full bg-terracotta-600 text-white py-2 rounded hover:bg-terracotta-700 transition">
                        Voir les disponibilités
                    </button>
                </div>
            </div>
        </div>

        <!-- PAGE: CULTURE -->
        <div id="page-culture" class="page-content fade-in">
            <h2 class="text-3xl font-bold text-terracotta-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Ville d'Art & d'Histoire</h2>

            <!-- Histoire (US_ID 6) -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg grid md:grid-cols-2 mb-8">
                <img src="https://images.unsplash.com/photo-1566839376686-e3d81c3c9079?auto=format&fit=crop&q=80&w=800" alt="Histoire" class="h-64 md:h-full w-full object-cover">
                <div class="p-8 flex flex-col justify-center">
                    <h3 class="text-2xl font-bold mb-4 text-terracotta-800 font-serif">Un Patrimoine Séculaire</h3>
                    <p class="text-gray-600 mb-4">
                        Fondée au XIIème siècle, ScrumLand a conservé ses remparts médiévaux et son église romane classée. 
                        Promenez-vous dans les ruelles pavées pour découvrir l'âme de notre cité.
                    </p>
                    <button class="self-start px-6 py-2 border-2 border-terracotta-600 text-terracotta-600 rounded-full hover:bg-terracotta-50 transition">
                        Parcours Historique
                    </button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Jumelage (US_ID 7) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="globe" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Jumelage</h3>
                    </div>
                    <p class="mb-4 text-gray-600">ScrumLand est fièrement jumelée avec :</p>
                    <ul class="space-y-3">
                        <li class="flex items-center space-x-3">
                            <span class="text-2xl">🇮🇹</span> 
                            <span class="font-semibold">Kanban-ville (Italie)</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="text-2xl">🇩🇪</span> 
                            <span class="font-semibold">Wasserfall-Dorf (Allemagne)</span>
                        </li>
                    </ul>
                </div>

                <!-- Galerie (US_ID 13) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="camera" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">La Ville en Images</h3>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="bg-gray-200 h-20 rounded"></div>
                        <div class="bg-gray-200 h-20 rounded"></div>
                        <div class="bg-gray-200 h-20 rounded"></div>
                        <div class="bg-gray-200 h-20 rounded"></div>
                        <div class="bg-gray-200 h-20 rounded"></div>
                        <div class="bg-gray-200 h-20 rounded flex items-center justify-center text-xs text-gray-500 cursor-pointer hover:bg-gray-300">
                            +15 photos
                        </div>
                    </div>
                    <button class="w-full mt-4 text-center text-terracotta-600 text-sm font-semibold hover:underline">Accéder à la galerie</button>
                </div>
            </div>
        </div>

        <!-- PAGE: LIFE (Vivre ici) -->
        <div id="page-life" class="page-content fade-in">
            <h2 class="text-3xl font-bold text-terracotta-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Vivre à ScrumLand</h2>

            <!-- Cantine (US_ID 17) -->
            <div class="bg-green-50 border border-green-200 rounded-xl p-6 flex flex-col md:flex-row items-center justify-between mb-8">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="bg-green-100 p-3 rounded-full mr-4">
                        <i data-lucide="utensils" class="w-8 h-8 text-green-700"></i>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-green-900">Restauration Scolaire</h3>
                        <p class="text-green-800">Menu de la semaine et réservations de tickets</p>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <button class="px-4 py-2 bg-white text-green-700 border border-green-300 rounded hover:bg-green-50">Voir les menus</button>
                    <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Portail Famille</button>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <!-- Associations (US_ID 15) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="users" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Vie Associative</h3>
                    </div>
                    <p class="mb-4 text-sm text-gray-600">Plus de 50 associations animent notre ville.</p>
                    <ul class="text-sm space-y-2 mb-4">
                        <li>• Club des Aînés</li>
                        <li>• Comité des Fêtes</li>
                        <li>• Amis du Patrimoine</li>
                    </ul>
                    <button class="text-blue-600 text-sm font-semibold hover:underline">Annuaire des associations</button>
                </div>

                <!-- Sport (US_ID 16) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="activity" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Sports & Loisirs</h3>
                    </div>
                    <p class="mb-4 text-sm text-gray-600">Infrastructures et clubs sportifs.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Football</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Tennis</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Judo</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Pétanque</span>
                    </div>
                    <button class="text-blue-600 text-sm font-semibold hover:underline">Planning des stades</button>
                </div>

                <!-- Commerces (US_ID 14) -->
                <div class="bg-white rounded-xl shadow-md p-6 border-t-4 border-terracotta-500">
                    <div class="flex items-center mb-4">
                        <i data-lucide="shopping-bag" class="w-6 h-6 text-terracotta-600 mr-3"></i>
                        <h3 class="text-xl font-bold text-gray-800">Commerces Locaux</h3>
                    </div>
                    <p class="mb-4 text-sm text-gray-600">Soutenez nos commerçants de proximité.</p>
                    <div class="bg-yellow-50 p-3 rounded text-sm text-yellow-800 border border-yellow-200">
                        <strong>Marché Hebdomadaire :</strong><br/> Tous les jeudis et dimanches matins, place de la Mairie.
                    </div>
                </div>
            </div>

            <!-- Calendrier (US_ID 18) -->
            <section>
                <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center font-serif">
                    <i data-lucide="calendar" class="w-6 h-6 mr-2"></i> Prochains Événements
                </h3>
                <div class="bg-white rounded-xl shadow overflow-hidden">
                    <div class="p-4 flex items-center justify-between hover:bg-gray-50 border-b">
                        <div class="flex items-center">
                            <div class="bg-terracotta-100 text-terracotta-800 p-2 rounded-lg text-center min-w-[60px] mr-4">
                                <div class="text-xs uppercase font-bold">Déc</div>
                                <div class="text-xl font-bold">15</div>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Marché de Noël</h4>
                                <p class="text-gray-500 text-sm">10h - 18h</p>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="text-gray-400 hover:text-terracotta-600"></i>
                    </div>
                    <div class="p-4 flex items-center justify-between hover:bg-gray-50 border-b">
                        <div class="flex items-center">
                            <div class="bg-terracotta-100 text-terracotta-800 p-2 rounded-lg text-center min-w-[60px] mr-4">
                                <div class="text-xs uppercase font-bold">Nov</div>
                                <div class="text-xl font-bold">20</div>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Tournoi de Pétanque</h4>
                                <p class="text-gray-500 text-sm">14h</p>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="text-gray-400 hover:text-terracotta-600"></i>
                    </div>
                    <div class="p-4 flex items-center justify-between hover:bg-gray-50">
                        <div class="flex items-center">
                            <div class="bg-terracotta-100 text-terracotta-800 p-2 rounded-lg text-center min-w-[60px] mr-4">
                                <div class="text-xs uppercase font-bold">Nov</div>
                                <div class="text-xl font-bold">11</div>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg">Cérémonie du 11 Novembre</h4>
                                <p class="text-gray-500 text-sm">11h</p>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="text-gray-400 hover:text-terracotta-600"></i>
                    </div>
                </div>
            </section>
        </div>

        <!-- PAGE: CONTACT -->
        <div id="page-contact" class="page-content fade-in">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold text-terracotta-800 mb-6 border-b-4 border-yellow-400 inline-block pb-2 font-serif">Contactez-nous</h2>

                <!-- Form (US_ID 8) -->
                <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                                <input type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-terracotta-500 focus:border-terracotta-500 p-2 border" placeholder="Votre nom">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-terracotta-500 focus:border-terracotta-500 p-2 border" placeholder="votre@email.com">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Sujet</label>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:ring-terracotta-500 focus:border-terracotta-500 p-2 border">
                                <option>État Civil</option>
                                <option>Voirie</option>
                                <option>Urbanisme</option>
                                <option>Autre demande</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea rows="4" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-terracotta-500 focus:border-terracotta-500 p-2 border" placeholder="Votre message..."></textarea>
                        </div>
                        <button type="button" class="w-full bg-terracotta-600 text-white font-bold py-3 rounded-md hover:bg-terracotta-700 transition">
                            Envoyer le message
                        </button>
                    </form>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <h4 class="font-bold text-blue-900 mb-2 flex items-center"><i data-lucide="map-pin" class="w-5 h-5 mr-2"></i> Adresse</h4>
                        <p class="text-blue-800">1 Place de la République<br>34000 ScrumLand</p>
                        <p class="text-blue-800 mt-2">Lundi - Vendredi: 8h30 - 17h00</p>
                    </div>
                    <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                        <h4 class="font-bold text-blue-900 mb-2 flex items-center"><i data-lucide="phone" class="w-5 h-5 mr-2"></i> Téléphone</h4>
                        <p class="text-blue-800">Standard: 04 67 00 00 00</p>
                        <p class="text-red-600 font-bold mt-2">Urgence: 04 99 99 99 99</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-800 text-white pt-12 pb-6 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-xl font-bold mb-4 font-serif">Mairie de ScrumLand</h3>
                <p class="text-slate-300 mb-4 max-w-sm">Douceur de vivre au sud de la France. Entre patrimoine historique et dynamisme moderne.</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-400 hover:text-white"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="text-slate-400 hover:text-white"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    <a href="#" class="text-slate-400 hover:text-white"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                </div>
            </div>
            
            <div>
                <h4 class="font-bold mb-4 border-b border-slate-600 pb-2 inline-block">Contact</h4>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-start"><i data-lucide="map-pin" class="w-4 h-4 mr-2 mt-1 shrink-0"></i> 1 Place de la République</li>
                    <li class="flex items-center"><i data-lucide="phone" class="w-4 h-4 mr-2"></i> 04 99 99 99 99 (Urgence)</li>
                    <li class="flex items-center"><i data-lucide="mail" class="w-4 h-4 mr-2"></i> contact@mairie-scrumland.fr</li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-4 border-b border-slate-600 pb-2 inline-block">Liens Utiles</h4>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li><a href="#" class="hover:text-white">Mentions légales</a></li>
                    <li><a href="#" class="hover:text-white">Politique de confidentialité</a></li>
                    <li><a href="#" class="hover:text-white">Plan du site</a></li>
                    <li><a href="#" class="hover:text-white">Accessibilité</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-700 mt-12 pt-6 text-center text-slate-500 text-sm">
            &copy; 2024 Mairie de ScrumLand. Tous droits réservés.
        </div>
    </footer>

    <!-- JavaScript Logic -->
    <script>
        // Initialize Icons
        lucide.createIcons();

        // Navigation Logic
        function showPage(pageId) {
            // Hide all pages
            document.querySelectorAll('.page-content').forEach(el => {
                el.classList.remove('active');
            });

            // Show target page
            const target = document.getElementById('page-' + pageId);
            if (target) {
                target.classList.add('active');
            }

            // Update Nav State
            document.querySelectorAll('.nav-link').forEach(btn => {
                if(btn.dataset.target === pageId) {
                    btn.classList.add('bg-terracotta-100', 'text-terracotta-800');
                    btn.classList.remove('text-gray-600', 'hover:bg-gray-100');
                } else {
                    btn.classList.remove('bg-terracotta-100', 'text-terracotta-800');
                    btn.classList.add('text-gray-600', 'hover:bg-gray-100');
                }
            });

            // Scroll top
            window.scrollTo(0,0);
        }

        // Mobile Menu Logic
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('menu-icon');
            
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                // Could change icon here if needed
            } else {
                menu.classList.add('hidden');
            }
        }

        // Fake Language Logic
        function changeLang(lang) {
            if (lang === 'en') {
                alert("The English version is currently under construction.");
            }
        }
    </script>
</body>
</html>