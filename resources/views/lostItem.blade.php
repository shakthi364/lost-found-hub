<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recently Lost Items - Lost & Found Hub</title>

    @vite(['resources/css/lostItemStyle.css', 'resources/js/lostItemScript.js'])

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
                <a href="#" class="hover:text-primary transition">Report Lost Item</a>
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
                            <input type="text" placeholder="Search for lost items..." 
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
                    <a href="index.html" class="hover:text-primary">Home</a> / <span class="text-dark">Recently Lost Items</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-primary to-accent text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold mb-2">Recently Lost Items</h1>
                    <p class="text-lg opacity-90">Help reunite people with their lost belongings</p>
                </div>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <span class="bg-white bg-opacity-20 px-4 py-2 rounded-lg font-medium">312 Items Lost</span>
                    <button class="bg-white text-primary hover:bg-gray-100 px-4 py-2 rounded-lg font-bold transition duration-300">
                        <i class="fas fa-bell mr-2"></i> Set Up Alerts
                    </button>
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
                                    <span class="ml-auto text-gray-500 text-sm">89</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-personal" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-personal" class="ml-2 text-gray-700">Personal Items</label>
                                    <span class="ml-auto text-gray-500 text-sm">112</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-jewelry" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-jewelry" class="ml-2 text-gray-700">Jewelry</label>
                                    <span class="ml-auto text-gray-500 text-sm">45</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-documents" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-documents" class="ml-2 text-gray-700">Documents</label>
                                    <span class="ml-auto text-gray-500 text-sm">67</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="cat-pets" class="rounded text-primary focus:ring-primary">
                                    <label for="cat-pets" class="ml-2 text-gray-700">Pets</label>
                                    <span class="ml-auto text-gray-500 text-sm">23</span>
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
                                    <span class="ml-auto text-gray-500 text-sm">134</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-kandy" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-kandy" class="ml-2 text-gray-700">Kandy</label>
                                    <span class="ml-auto text-gray-500 text-sm">56</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-galle" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-galle" class="ml-2 text-gray-700">Galle</label>
                                    <span class="ml-auto text-gray-500 text-sm">42</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-gampaha" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-gampaha" class="ml-2 text-gray-700">Gampaha</label>
                                    <span class="ml-auto text-gray-500 text-sm">38</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="loc-other" class="rounded text-primary focus:ring-primary">
                                    <label for="loc-other" class="ml-2 text-gray-700">Other Areas</label>
                                    <span class="ml-auto text-gray-500 text-sm">42</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Date Lost Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Date Lost</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" id="date-today" name="date-lost" class="text-primary focus:ring-primary">
                                    <label for="date-today" class="ml-2 text-gray-700">Today</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-week" name="date-lost" class="text-primary focus:ring-primary">
                                    <label for="date-week" class="ml-2 text-gray-700">Past Week</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-month" name="date-lost" class="text-primary focus:ring-primary">
                                    <label for="date-month" class="ml-2 text-gray-700">Past Month</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" id="date-all" name="date-lost" class="text-primary focus:ring-primary" checked>
                                    <label for="date-all" class="ml-2 text-gray-700">Any Time</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Urgency Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Urgency Level</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="urgency-high" class="rounded text-primary focus:ring-primary">
                                    <label for="urgency-high" class="ml-2 text-gray-700">High Urgency</label>
                                    <span class="ml-auto text-gray-500 text-sm">67</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="urgency-medium" class="rounded text-primary focus:ring-primary">
                                    <label for="urgency-medium" class="ml-2 text-gray-700">Medium Urgency</label>
                                    <span class="ml-auto text-gray-500 text-sm">145</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="urgency-low" class="rounded text-primary focus:ring-primary">
                                    <label for="urgency-low" class="ml-2 text-gray-700">Low Urgency</label>
                                    <span class="ml-auto text-gray-500 text-sm">100</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reward Filter -->
                    <div class="filter-section mb-6">
                        <div class="filter-toggle flex justify-between items-center mb-3">
                            <h3 class="font-bold text-dark">Reward Offered</h3>
                            <i class="fas fa-chevron-down text-gray-500"></i>
                        </div>
                        <div class="filter-options">
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="reward-yes" class="rounded text-primary focus:ring-primary">
                                    <label for="reward-yes" class="ml-2 text-gray-700">With Reward</label>
                                    <span class="ml-auto text-gray-500 text-sm">89</span>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="reward-no" class="rounded text-primary focus:ring-primary">
                                    <label for="reward-no" class="ml-2 text-gray-700">No Reward</label>
                                    <span class="ml-auto text-gray-500 text-sm">223</span>
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
                            <span class="text-gray-600">Showing 1-12 of 312 items</span>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <span class="text-gray-600 mr-2">Sort by:</span>
                                <select class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Newest First</option>
                                    <option>Oldest First</option>
                                    <option>Urgency (High to Low)</option>
                                    <option>Location (Nearest)</option>
                                    <option>Reward Amount</option>
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
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-high">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                                <i class="fas fa-passport text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">HIGH URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Passport & Visa Documents</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost in Fort area, Colombo. Flight in 3 days.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 2 days ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 10,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 2 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-high">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                                <i class="fas fa-dog text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">HIGH URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Pet Dog - Golden Retriever</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost in Dehiwala area. Name: Max, microchipped.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 1 day ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 15,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 3 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-medium">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                                <i class="fas fa-laptop text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-orange-500 text-white text-xs font-medium px-2 py-1 rounded">MEDIUM URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">MacBook Pro 16"</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost in a taxi from Kandy to Colombo. Silver color.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 3 days ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 20,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 4 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-medium">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                                <i class="fas fa-camera text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-orange-500 text-white text-xs font-medium px-2 py-1 rounded">MEDIUM URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Canon DSLR Camera</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost at Viharamahadevi Park, Colombo. Black color.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 4 days ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 8,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 5 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-low">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                                <i class="fas fa-book text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">LOW URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">University Textbooks</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost at University of Colombo library. Engineering books.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 1 week ago</span>
                                <span class="text-sm font-bold text-gray-500">No Reward</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 6 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-low">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                                <i class="fas fa-tshirt text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">LOW URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Jacket - Navy Blue</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost at a restaurant in Galle Fort. Size M.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 2 weeks ago</span>
                                <span class="text-sm font-bold text-gray-500">No Reward</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 7 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-high">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-red-400 to-red-600 flex items-center justify-center">
                                <i class="fas fa-pills text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">HIGH URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Medication - Heart Medicine</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost in Negombo area. Critical medication needed daily.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 1 day ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 5,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 8 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-medium">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-orange-400 to-orange-600 flex items-center justify-center">
                                <i class="fas fa-ring text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-orange-500 text-white text-xs font-medium px-2 py-1 rounded">MEDIUM URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Wedding Ring - Gold</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost at Mount Lavinia Beach. Sentimental value.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 5 days ago</span>
                                <span class="text-sm font-bold text-primary">Reward: Rs 25,000</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
                        </div>
                    </div>
                    
                    <!-- Item 9 -->
                    <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden urgency-low">
                        <div class="h-48 bg-gray-200 relative">
                            <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                                <i class="fas fa-football-ball text-5xl text-white opacity-80"></i>
                            </div>
                            <div class="absolute top-3 left-3 status-lost text-xs font-medium px-2 py-1 rounded">LOST</div>
                            <div class="absolute top-3 right-3 bg-white bg-opacity-90 w-8 h-8 rounded-full flex items-center justify-center">
                                <i class="far fa-heart text-gray-600"></i>
                            </div>
                            <div class="absolute bottom-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">LOW URGENCY</div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-dark mb-1 text-lg">Cricket Kit Bag</h3>
                            <p class="text-gray-600 text-sm mb-2">Lost at SSC grounds, Colombo. Contains cricket gear.</p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-500">Lost: 3 weeks ago</span>
                                <span class="text-sm font-bold text-gray-500">No Reward</span>
                            </div>
                            <button class="w-full bg-primary hover:bg-secondary text-white py-2 rounded-lg font-medium transition duration-300">
                                I Found This
                            </button>
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
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">26</a>
                        <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-primary hover:text-white transition">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Setup Modal (Hidden by default) -->
    <div id="alertModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-dark">Set Up Search Alerts</h3>
                <button id="closeAlertModal" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <p class="text-gray-600 mb-4">Get notified when items matching your criteria are found.</p>
            
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Search Keywords</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g., iPhone, wallet, keys">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>Any Category</option>
                        <option>Electronics</option>
                        <option>Personal Items</option>
                        <option>Jewelry</option>
                        <option>Documents</option>
                        <option>Pets</option>
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>Any Location</option>
                        <option>Colombo</option>
                        <option>Kandy</option>
                        <option>Galle</option>
                        <option>Gampaha</option>
                        <option>Other Areas</option>
                    </select>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="emailAlerts" class="rounded text-primary focus:ring-primary">
                    <label for="emailAlerts" class="ml-2 text-sm text-gray-700">Send email alerts</label>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="pushAlerts" class="rounded text-primary focus:ring-primary" checked>
                    <label for="pushAlerts" class="ml-2 text-sm text-gray-700">Send push notifications</label>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-3">
                <button id="cancelAlert" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                    Cancel
                </button>
                <button class="px-4 py-2 bg-primary hover:bg-secondary text-white rounded-lg font-medium transition">
                    Set Up Alert
                </button>
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