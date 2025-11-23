<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/foundItemStyle.css', 'resources/js/foundItemScript.js'])

    <title>Recently Found Items - Lost & Found Hub</title>
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
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-light">
    <!-- Top Bar -->
    <div class="bg-dark text-white py-2 text-sm hidden md:block">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex space-x-4">
                <span><i class="fas fa-map-marker-alt mr-1"></i> Sri Lanka</span>
                <span><i class="fas fa-globe mr-1"></i> English</span>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-primary transition">Help & Support</a>
                <a href="#" class="hover:text-primary transition">Report Found Item</a>
                <a href="#" class="hover:text-primary transition">Login</a>
                <a href="#" class="hover:text-primary transition">Register</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <i class="fas fa-search text-2xl text-primary"></i>
                    <h1 class="text-xl md:text-2xl font-bold text-dark">Lost & Found Hub</h1>
                </div>
                
                <!-- Search Bar -->
                <div class="hidden md:flex w-1/2 relative">
                    <div class="flex w-full">
                        <div class="relative flex-grow">
                            <input type="text" placeholder="Search for found items..." 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            <button class="absolute right-3 top-2 text-gray-500">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <button class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-r-lg font-medium transition duration-300">
                            Search
                        </button>
                    </div>
                </div>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <button class="hidden md:flex bg-primary hover:bg-secondary text-white px-4 py-2 rounded-lg font-bold transition duration-300 items-center">
                        <i class="fas fa-plus-circle mr-2"></i> Report Item
                    </button>
                    <div class="hidden md:flex items-center space-x-3">
                        <div class="relative">
                            <i class="far fa-bell text-xl text-gray-600 hover:text-primary cursor-pointer"></i>
                        </div>
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold cursor-pointer">
                            JD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="bg-white border-t border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between items-center py-3">
                <div class="flex space-x-6">
                    <a href="#" class="text-dark hover:text-primary font-medium transition">All Items</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Electronics</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Personal Items</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Jewelry</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Documents</a>
                    <a href="#" class="text-dark hover:text-primary font-medium transition">Pets</a>
                </div>
                <div class="text-sm text-gray-600">
                    <a href="index.html" class="hover:text-primary">Home</a> / <span class="text-dark">Recently Found Items</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-primary to-accent text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold mb-2">Recently Found Items</h1>
                    <p class="text-lg opacity-90">Browse all found items reported by our community</p>
                </div>
                <div class="mt-4 md:mt-0">
                    <span class="bg-white bg-opacity-20 px-4 py-2 rounded-lg font-medium">245 Items Found</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Filters Sidebar -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-xl shadow-sm p-6 sticky top-24">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl font-bold text-dark">Filters</h2>
                        <button id="resetFilters" class="text-primary hover:text-secondary text-sm font-medium">Reset All</button>
                    </div>

                    <!-- Search Filter -->
                    <div class="mb-6">
                        <h3 class="font-bold text-dark mb-3">Search</h3>
                        <div class="relative">
                            <input type="text" placeholder="Item name, description..." 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            <button class="absolute right-3 top-2 text-gray-500">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Category Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Category</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options active">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-electronics" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-electronics" class="ml-2 text-gray-700">Electronics</label>
                                    <span class="ml-auto text-gray-500 text-sm">67</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-personal" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-personal" class="ml-2 text-gray-700">Personal Items</label>
                                    <span class="ml-auto text-gray-500 text-sm">89</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-jewelry" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-jewelry" class="ml-2 text-gray-700">Jewelry</label>
                                    <span class="ml-auto text-gray-500 text-sm">34</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-documents" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-documents" class="ml-2 text-gray-700">Documents</label>
                                    <span class="ml-auto text-gray-500 text-sm">42</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-pets" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-pets" class="ml-2 text-gray-700">Pets</label>
                                    <span class="ml-auto text-gray-500 text-sm">13</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Location</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options active">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-colombo" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-colombo" class="ml-2 text-gray-700">Colombo</label>
                                    <span class="ml-auto text-gray-500 text-sm">98</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-kandy" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-kandy" class="ml-2 text-gray-700">Kandy</label>
                                    <span class="ml-auto text-gray-500 text-sm">45</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-galle" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-galle" class="ml-2 text-gray-700">Galle</label>
                                    <span class="ml-auto text-gray-500 text-sm">32</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-gampaha" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-gampaha" class="ml-2 text-gray-700">Gampaha</label>
                                    <span class="ml-auto text-gray-500 text-sm">28</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-other" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-other" class="ml-2 text-gray-700">Other Areas</label>
                                    <span class="ml-auto text-gray-500 text-sm">42</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Date Found Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Date Found</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="date-today" name="date-found" class="text-primary focus:ring-primary">
                                    <label for="date-today" class="ml-2 text-gray-700">Today</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-week" name="date-found" class="text-primary focus:ring-primary">
                                    <label for="date-week" class="ml-2 text-gray-700">Past Week</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-month" name="date-found" class="text-primary focus:ring-primary">
                                    <label for="date-month" class="ml-2 text-gray-700">Past Month</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-all" name="date-found" class="text-primary focus:ring-primary" checked>
                                    <label for="date-all" class="ml-2 text-gray-700">Any Time</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Value Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Estimated Value</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="value-low" name="item-value" class="text-primary focus:ring-primary">
                                    <label for="value-low" class="ml-2 text-gray-700">Under Rs 5,000</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="value-medium" name="item-value" class="text-primary focus:ring-primary">
                                    <label for="value-medium" class="ml-2 text-gray-700">Rs 5,000 - 50,000</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="value-high" name="item-value" class="text-primary focus:ring-primary">
                                    <label for="value-high" class="ml-2 text-gray-700">Over Rs 50,000</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="value-any" name="item-value" class="text-primary focus:ring-primary" checked>
                                    <label for="value-any" class="ml-2 text-gray-700">Any Value</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Apply Filters Button -->
                    <button class="w-full bg-primary hover:bg-secondary text-white py-3 rounded-lg font-bold transition duration-300">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Items Grid -->
            <div class="lg:w-3/4">
                <!-- Sorting and View Options -->
                <div class="bg-white rounded-xl shadow-sm p-4 mb-6">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="mb-4 md:mb-0">
                            <span class="text-gray-600">Showing 1-12 of 245 items</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <span class="text-gray-600 mr-2">Sort by:</span>
                                <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Newest First</option>
                                    <option>Oldest First</option>
                                    <option>Location (Nearest)</option>
                                    <option>Category</option>
                                </select>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="p-2 rounded-lg bg-primary text-white">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="p-2 rounded-lg bg-gray-200 text-gray-700">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Items Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Item 1 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">iPhone 13 Pro</h3>
                            <p class="text-gray-600 text-sm mb-2">Found near Galle Face Green, Colombo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 2 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                                <i class="fas fa-wallet text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Leather Wallet</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Pettah Market, Colombo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 1 day ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                                <i class="fas fa-key text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Car Keys with Keychain</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Kandy City Center</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 3 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                                <i class="fas fa-gem text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Gold Ring</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Galle Fort</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 5 hours ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                                <i class="fas fa-laptop text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">MacBook Pro 13"</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at University of Colombo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 4 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 6 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-indigo-400 to-indigo-600 flex items-center justify-center">
                                <i class="fas fa-camera text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Canon DSLR Camera</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Viharamahadevi Park</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 6 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 7 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-teal-400 to-teal-600 flex items-center justify-center">
                                <i class="fas fa-headphones text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Wireless Headphones</h3>
                            <p class="text-gray-600 text-sm mb-2">Found in a bus from Kandy to Colombo</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 1 week ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 8 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-pink-400 to-pink-600 flex items-center justify-center">
                                <i class="fas fa-passport text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Passport - US Citizen</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Bandaranaike Airport</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 2 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Item 9 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                                <i class="fas fa-sunglasses text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Designer Sunglasses</h3>
                            <p class="text-gray-600 text-sm mb-2">Found at Mount Lavinia Beach</p>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-gray-500">Found: 3 days ago</span>
                                <button class="bg-primary hover:bg-secondary text-white text-sm px-3 py-1 rounded transition duration-300">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-primary text-white">1</a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">2</a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">3</a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">4</a>
                        <span class="px-2 text-gray-500">...</span>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">12</a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

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