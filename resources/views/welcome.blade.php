<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
    <style>
        .category-card:hover .category-icon {
            transform: scale(1.1);
        }
        .item-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .item-card:hover {
            transform: translateY(-5px);
        }
        .location-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 50;
        }
        .location-dropdown.active {
            display: block;
        }
        .location-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            z-index: 50;
        }

        .location-dropdown.active {
            display: block;
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            z-index: 100;
            overflow-y: auto;
        }
        .mobile-menu.active {
            display: block;
        }
        .status-found {
            background-color: #10B981;
            color: white;
        }
        .status-lost {
            background-color: #EF4444;
            color: white;
        }
        .status-claimed {
            background-color: #6B7280;
            color: white;
        }
    </style>
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
            <div class="flex items-center space-x-4">
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
                    <button class="hidden md:flex bg-primary hover:bg:secondary text-white px-4 rounded-lg font-bold transition duration-300 items-center">
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

    <script>
        // Toggle location dropdown
        document.getElementById('locationBtn').addEventListener('click', function() {
            document.getElementById('locationDropdown').classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const locationBtn = document.getElementById('locationBtn');
            const locationDropdown = document.getElementById('locationDropdown');
            
            if (!locationBtn.contains(event.target) && !locationDropdown.contains(event.target)) {
                locationDropdown.classList.remove('active');
            }
        });

        // Mobile menu functionality
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.add('active');
        });

        document.getElementById('closeMobileMenu').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.remove('active');
        });

        // Mobile search functionality
        document.getElementById('mobileSearchBtn').addEventListener('click', function() {
            const mobileSearch = document.getElementById('mobileSearch');
            mobileSearch.classList.toggle('hidden');
        });
    </script>
</body>

</html>