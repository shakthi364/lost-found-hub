<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Lost & Found Hub') }}</title>

    @vite(['resources/css/welcomStyle.css', 'resources/js/welcomScript.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#6366F1',
                        accent: '#8B5CF6',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-light">
    <!-- top bar -->
    <div class="bg-dark text-white py-2 text-sm hidden md:block">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex space-x-4">
                <span><i class="fas fa-map-marker-alt mr-1"></i>Sri Lanka</span>
                <span><i class="fas fa-globe mr-1"></i>English</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-primary transition">Help & Support</a>
                <a href="#" class="hover:text-primary transition">Report Found Item</a>
                <a href="#" class="hover:text-primary transition">Login</a>
                <a href="#" class="hover:text-primary transition">Register</a>
            </div>
        </div>
    </div>

    <!-- mobile top bar -->
    <div class="bg-dark text-white py-2 text-sm md:hidden">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex space-x-4">
                <span><i class="fas fa-map-marker-alt mr-1"></i> Sri Lanka</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-primary transition">Login</a>
            </div>
        </div>
    </div>

    <!-- header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- logo and mobile menu button -->
                <div class="flex items-center space-x-4">
                    <button id="mobileMenuBtn" class="md:hidden text-dark">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="flex items-center">
                        <a href="#">
                            <img src="{{asset('img/logo.png')}}" alt="Lost & Found Hub Logo" class="h-12">
                        </a>
                    </div>
                </div>

                <!-- search bar hidden on mobile -->
                <div class="hidden md:flex w-1/2 relative">
                    <div class="flex w-full">
                        <div class="relative flex-grow">
                            <input type="text" placeholder="Search fro lost item (phone, wallets, keys...)" class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            <button class="absolute right-3 top-2 text-gray-500"><i class="fas fa-search"></i></button>
                        </div>
                        <button class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-r-lg font-medium transition duration-300">Search</button>
                    </div>
                </div>

                <!-- report item button and user menu -->
                <div class="flex items-center space-x-4">
                    <button class="hidden md:flex bg-primary hover:bg:secondary text-white px-4 py-2 rounded-lg font-bold transition duration-300 items-center">
                        <i class="fas fa-plus-circle mr-2"></i> Report Item
                    </button>
                    <div class="hidden md:flex items-center space-x-3">
                        <div class="relative">
                            <i class="far fa-bell text-xl text-gray-600 hover:text-primary cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold cursor-pointer">
                            SB
                        </div>
                    </div>
                    <!-- mobile search button -->
                    <button id="mobileSearchBtn" class="hidden text-dark">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- mobile search bar -->
            <div id="mobileSearch" class="mt-3 md:hidden hidden">
                <div class="flex">
                    <div class="relative flex-grow">
                        <input type="text" placeholder="Search for lost items..." class="w-full py-2 px-4 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <button class="absolute right-3 top-2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <button class="bg-primary hover:bg-secondary py-2 px-4 text-white rounded-r-lg font-medium transition duration-300">
                        Go
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="bg-white border-gray-200 hidden md:block">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between items-center py-3">
                <div class="flex space-x-6">
                    <a href="#" class="text-dark hover:text-primary font-medium transition">All Item</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Electronics</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Personal Items</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Jewelry</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Documents</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Pets</a>
                </div>
                <div class="relative">
                    <button id="locationBtn" class="text-dark hover:text-primary font-medium transition flex items-center">
                        <i class="fas fa-map-marker-alt mr-1"></i> All of Sri Lanka
                        <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </button>
                    <div id="locationDropdown" class="location-dropdown bg-white shadow-lg rounded-lg mt-2 p-4 w-64">
                        <h3 class="font-bold mb-3">Select Location</h3>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="#" class="text-dark hover:text-primary transition">Colombo</a>
                            <a href="#" class="text-dark hover:text-primary transition">Gampaha</a>
                            <a href="#" class="text-dark hover:text-primary transition">Kandy</a>
                            <a href="#" class="text-dark hover:text-primary transition">Galle</a>
                            <a href="#" class="text-dark hover:text-primary transition">Kurunegala</a>
                            <a href="#" class="text-dark hover:text-primary transition">Matara</a>
                            <a href="#" class="text-dark hover:text-primary transition">Anuradhapura</a>
                            <a href="#" class="text-dark hover:text-primary transition">Jaffna</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- mobile menu -->
     <div id="mobileMenu" class="mobile-menu">
        <div class="p-4">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-search text-2xl text-primary"></i>
                    <h1 class="text-xl font-bold text-dark">Lost & Found Hub</h1>
                </div>
                <button id="closeMobileMenu" class="text-dark">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>

            <div class="mb-6">
                <h3 class="font-bold text-dark mb-3">Categories</h3>
                <div class="space-y-2">
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">All Items</a>
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Electronics</a>
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Personal Items</a>
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Jewelry</a>
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Documents</a>
                    <a href="#" class="block py-2 px-4 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Pets</a>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="font-bold text-dark mb-3">Account</h3>
                <div class="space-y-2">
                    <a href="#" class="block py-2 text-dark hover:text-primary transition">Login</a>
                    <a href="#" class="block py-2 text-dark hover:text-primary transition">Register</a>
                    <a href="#" class="block py-2 text-dark hover:text-primary transition">Report Item</a>
                    <a href="#" class="block py-2 text-dark hover:text-primary transition">Help & Support</a>
                </div>
            </div>

            <div class="mb-6">
                <h3 class="font-bold text-dark mb-3">Location</h3>
                <div class="grid grid-cols-2 gap-2">
                    <a href="#" class="text-center py-2 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Colombo</a>
                    <a href="#" class="text-center py-2 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Kandy</a>
                    <a href="#" class="text-center py-2 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Galle</a>
                    <a href="#" class="text-center py-2 bg-light rounded-lg text-dark hover:bg-primary hover:text-white transition">Gampaha</a>
                </div>
            </div>
        </div>
     </div>

   <!-- Hero Banner -->
    <section class="bg-gradient-to-r from-primary to-accent text-white py-12">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Find Your Lost Items in Sri Lanka</h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">Lost something valuable? Found an item that doesn't belong to you? Our platform helps reunite people with their lost belongings.</p>
            <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                <button class="bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-lg font-bold text-lg transition duration-300">
                    Report Lost Item
                </button>
                <button class="bg-transparent border-2 border-white hover:bg-white hover:text-primary px-6 py-3 rounded-lg font-bold text-lg transition duration-300">
                    Report Found Item
                </button>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center text-dark mb-2">Commonly Lost Items</h2>
            <p class="text-gray-600 text-center mb-8 md:mb-10 max-w-2xl mx-auto">Browse through categories of commonly lost items to find what you're looking for</p>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6">
                <!-- Category 1 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Phones</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">245 items</p>
                </a>
                
                <!-- Category 2 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Wallets</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">189 items</p>
                </a>
                
                <!-- Category 3 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Keys</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">156 items</p>
                </a>
                
                <!-- Category 4 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Jewelry</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">98 items</p>
                </a>
                
                <!-- Category 5 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Documents</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">134 items</p>
                </a>
                
                <!-- Category 6 -->
                <a href="#" class="category-card bg-light rounded-xl p-4 md:p-6 text-center shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 md:w-16 md:h-16 bg-primary rounded-full flex items-center justify-center text-white text-xl md:text-2xl mx-auto mb-3 md:mb-4 category-icon transition duration-300">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3 class="font-bold text-dark text-sm md:text-base">Electronics</h3>
                    <p class="text-gray-500 text-xs md:text-sm mt-1">167 items</p>
                </a>
            </div>
            
            <div class="text-center mt-8 md:mt-10">
                <button class="bg-white hover:bg-gray-100 border border-gray-300 text-dark px-6 py-3 rounded-lg font-medium transition duration-300">
                    View All Categories
                </button>
            </div>
        </div>
    </section>

    <!-- Recently Found Items -->
    <section class="py-12 bg-light">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6 md:mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-dark">Recently Found Items</h2>
                <a href="#" class="text-primary hover:text-secondary font-medium transition">View All</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <!-- Item 1 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">iPhone 13 Pro</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Found near Galle Face Green, Colombo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Found: 2 days ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Claim
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-wallet text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Leather Wallet</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Found at Pettah Market, Colombo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Found: 1 day ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Claim
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                            <i class="fas fa-key text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Car Keys with Keychain</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Found at Kandy City Center</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Found: 3 days ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Claim
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                            <i class="fas fa-gem text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Gold Ring</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Found at Galle Fort</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Found: 5 hours ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Claim
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Lost Items -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6 md:mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-dark">Recently Lost Items</h2>
                <a href="#" class="text-primary hover:text-secondary font-medium transition">View All</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <!-- Item 1 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                            <i class="fas fa-camera text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Canon DSLR Camera</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Lost in Negombo Beach area</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Lost: 1 hour ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-indigo-400 to-indigo-600 flex items-center justify-center">
                            <i class="fas fa-passport text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Passport</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Lost in Moratuwa area</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Lost: 3 hours ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-teal-400 to-teal-600 flex items-center justify-center">
                            <i class="fas fa-headphones text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Wireless Headphones</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Lost in Nugegoda area</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Lost: 5 hours ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 sm:h-48 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-pink-400 to-pink-600 flex items-center justify-center">
                            <i class="fas fa-dog text-5xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                        <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                            <i class="far fa-heart text-gray-600"></i>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1 text-sm md:text-base">Pet Dog - Golden Retriever</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2">Lost in Dehiwala area</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs md:text-sm font-medium text-gray-500">Lost: 7 hours ago</span>
                            <button class="bg-primary hover:bg-secondary text-white text-xs px-3 py-1 rounded transition duration-300">
                                Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-12 bg-gradient-to-r from-primary to-accent text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-2">Success Stories</h2>
            <p class="text-center mb-8 md:mb-10 max-w-2xl mx-auto">Read about how our platform has helped reunite people with their lost belongings</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Story 1 -->
                <div class="bg-white bg-opacity-10 rounded-xl p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Kamal Perera</h4>
                            <p class="text-sm opacity-80">Colombo</p>
                        </div>
                    </div>
                    <p class="mb-4">"I lost my wallet with all my important documents while traveling in a bus. Thanks to Lost & Found Hub, a kind stranger found it and contacted me through this platform. Got everything back within 2 days!"</p>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                    </div>
                </div>
                
                <!-- Story 2 -->
                <div class="bg-white bg-opacity-10 rounded-xl p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Nimali Fernando</h4>
                            <p class="text-sm opacity-80">Kandy</p>
                        </div>
                    </div>
                    <p class="mb-4">"My daughter lost her favorite teddy bear at the mall. We were heartbroken until someone posted it on Lost & Found Hub. The platform made it so easy to connect with the finder and get it back. Thank you!"</p>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                    </div>
                </div>
                
                <!-- Story 3 -->
                <div class="bg-white bg-opacity-10 rounded-xl p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-primary mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Samantha Rajapaksa</h4>
                            <p class="text-sm opacity-80">Galle</p>
                        </div>
                    </div>
                    <p class="mb-4">"I found a valuable watch at a restaurant and didn't know how to find the owner. Lost & Found Hub made the process simple. The owner was so grateful when we connected. This platform is a blessing for our community!"</p>
                    <div class="flex items-center text-sm">
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                        <i class="fas fa-star text-yellow-300 mr-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile App Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
                    <h2 class="text-2xl md:text-3xl font-bold text-dark mb-4">Get the Lost & Found Hub App</h2>
                    <p class="text-lg md:text-xl text-gray-600 mb-6">Report lost items or found items on the go with our mobile app. Available for both iOS and Android devices.</p>
                    <div class="flex flex-col sm:flex-row justify-center md:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <button class="bg-dark text-white hover:bg-gray-800 px-4 py-3 rounded-lg font-bold transition duration-300 flex items-center justify-center">
                            <i class="fab fa-apple text-2xl mr-2"></i>
                            <div class="text-left">
                                <div class="text-xs">Download on the</div>
                                <div class="text-base">App Store</div>
                            </div>
                        </button>
                        <button class="bg-dark text-white hover:bg-gray-800 px-4 py-3 rounded-lg font-bold transition duration-300 flex items-center justify-center">
                            <i class="fab fa-google-play text-xl mr-2"></i>
                            <div class="text-left">
                                <div class="text-xs">Get it on</div>
                                <div class="text-base">Google Play</div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <div class="w-48 h-72 md:w-64 md:h-96 bg-primary rounded-3xl shadow-2xl flex items-center justify-center">
                            <i class="fas fa-search text-4xl md:text-6xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-search text-xl text-primary"></i>
                        <h3 class="text-xl font-bold">Lost & Found Hub</h3>
                    </div>
                    <p class="text-gray-400 text-sm md:text-base">Sri Lanka's trusted platform to report and find lost items. Helping reunite people with their belongings since 2023.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Report Lost Item</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Report Found Item</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Browse Items</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Success Stories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Safety Tips</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Terms & Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm md:text-base">Help & Support</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2 text-primary"></i>
                            <span class="text-gray-400 text-sm md:text-base">+94 11 234 5678</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-primary"></i>
                            <span class="text-gray-400 text-sm md:text-base">help@lostfoundhub.lk</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
                            <span class="text-gray-400 text-sm md:text-base">Colombo, Sri Lanka</span>
                        </li>
                    </ul>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="bg-gray-700 w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <i class="fab fa-facebook-f text-sm md:text-base"></i>
                        </a>
                        <a href="#" class="bg-gray-700 w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <i class="fab fa-twitter text-sm md:text-base"></i>
                        </a>
                        <a href="#" class="bg-gray-700 w-8 h-8 md:w-10 md:h-10 rounded-full flex items-center justify-center hover:bg-primary transition">
                            <i class="fab fa-instagram text-sm md:text-base"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p class="text-sm md:text-base">&copy; 2023 Lost & Found Hub. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>