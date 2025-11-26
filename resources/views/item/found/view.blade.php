<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 13 Pro - Lost & Found Hub</title>

    @vite(['resources/css/singalProductStyle.css', 'resources/js/singalProductScript.js'])

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
                    <a href="index.html" class="hover:text-primary">Home</a> / 
                    <a href="found-items.html" class="hover:text-primary">Found Items</a> / 
                    <span class="text-dark">iPhone 13 Pro</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Product View Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Product Images -->
            <div class="lg:w-1/2">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="image-gallery">
                        <div class="main-image">
                            <div class="w-full h-80 bg-gradient-to-r from-blue-400 to-blue-600 rounded-xl flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-8xl text-white opacity-80"></i>
                            </div>
                        </div>
                        <div class="bg-gray-200 rounded-lg h-24 flex items-center justify-center cursor-pointer">
                            <i class="fas fa-mobile-alt text-3xl text-gray-500"></i>
                        </div>
                        <div class="bg-gray-200 rounded-lg h-24 flex items-center justify-center cursor-pointer">
                            <i class="fas fa-camera text-3xl text-gray-500"></i>
                        </div>
                        <div class="bg-gray-200 rounded-lg h-24 flex items-center justify-center cursor-pointer">
                            <i class="fas fa-search text-3xl text-gray-500"></i>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="font-bold text-dark text-lg mb-3">Item Verification</h3>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-2"></i>
                                <span class="text-sm text-gray-700">Verified Finder</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-shield-alt text-blue-500 mr-2"></i>
                                <span class="text-sm text-gray-700">Secure Handover</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div class="lg:w-1/2">
                <div class="bg-white rounded-xl shadow-sm p-6">
                    <div class="flex justify-between items-start mb-4">
                        <div>
                            <div class="flex items-center space-x-2 mb-2">
                                <span class="status-found text-xs font-medium px-2 py-1 rounded">FOUND</span>
                                <span class="text-xs text-gray-500">Item #LF-2023-4872</span>
                            </div>
                            <h1 class="text-2xl md:text-3xl font-bold text-dark">iPhone 13 Pro</h1>
                            <p class="text-gray-600 mt-1">Found near Galle Face Green, Colombo</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-gray-200 transition">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 hover:bg-gray-200 transition">
                                <i class="fas fa-share-alt"></i>
                            </button>
                        </div>
                    </div>

                    <div class="border-t border-b border-gray-200 py-4 my-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Date Found</h3>
                                <p class="font-medium">October 15, 2023</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Location</h3>
                                <p class="font-medium">Galle Face Green, Colombo</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Category</h3>
                                <p class="font-medium">Electronics</p>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Condition</h3>
                                <p class="font-medium">Good</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="font-bold text-dark mb-2">Description</h3>
                        <p class="text-gray-700">Found this iPhone 13 Pro near the food stalls at Galle Face Green. It has a silver finish and a black protective case with a floral design. The phone was found with about 30% battery remaining. It appears to be in good condition with no visible damage to the screen or body.</p>
                    </div>

                    <div class="mb-6">
                        <h3 class="font-bold text-dark mb-2">Distinguishing Features</h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-1">
                            <li>Silver color with black floral case</li>
                            <li>Small scratch on the bottom right corner of the screen</li>
                            <li>Wallpaper is a photo of a golden retriever</li>
                            <li>Has a SIM card from Dialog</li>
                        </ul>
                    </div>

                    <div class="bg-blue-50 rounded-lg p-4 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-500 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold text-blue-800">Verification Required</h4>
                                <p class="text-blue-700 text-sm mt-1">To claim this item, you'll need to provide proof of ownership such as the serial number, purchase receipt, or ability to unlock the device.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <button class="flex-1 bg-primary hover:bg-secondary text-white py-3 rounded-lg font-bold transition duration-300 flex items-center justify-center">
                            <i class="fas fa-hand-holding-heart mr-2"></i> Claim This Item
                        </button>
                        <button class="flex-1 border border-primary text-primary hover:bg-primary hover:text-white py-3 rounded-lg font-bold transition duration-300 flex items-center justify-center">
                            <i class="fas fa-envelope mr-2"></i> Contact Finder
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments Section -->
        <div class="mt-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-dark">Comments & Updates</h2>
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-500 text-sm">Sort by:</span>
                        <select class="border border-gray-300 rounded-lg px-2 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Most Liked</option>
                        </select>
                    </div>
                </div>

                <!-- Comment Input -->
                <div class="comment-box bg-gray-50 rounded-lg p-4 mb-6">
                    <div class="flex space-x-3">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center text-white font-bold">
                            JD
                        </div>
                        <div class="flex-1">
                            <textarea placeholder="Write a comment..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none" rows="3"></textarea>
                            <div class="flex justify-between items-center mt-3">
                                <div class="flex space-x-2">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="far fa-smile"></i>
                                    </button>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-camera"></i>
                                    </button>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </button>
                                </div>
                                <button class="bg-primary hover:bg-secondary text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                                    Post Comment
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments List -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="comment-box">
                        <div class="flex space-x-3">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold">
                                SP
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h4 class="font-bold text-dark">Samantha Perera</h4>
                                            <p class="text-gray-500 text-sm">2 hours ago</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                    <p class="text-gray-700 mb-3">I think this might be my phone! I lost it on Saturday evening while watching the sunset at Galle Face. The case description matches perfectly. How can I verify if it's mine?</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>Like</span>
                                        </button>
                                        <button class="flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-comment"></i>
                                            <span>Reply</span>
                                        </button>
                                        <span>3 replies</span>
                                    </div>
                                </div>

                                <!-- Replies -->
                                <div class="comment-reply mt-4 space-y-4">
                                    <!-- Reply 1 -->
                                    <div class="flex space-x-3">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                            LF
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-gray-50 rounded-lg p-3">
                                                <div class="flex justify-between items-start mb-1">
                                                    <div>
                                                        <h4 class="font-bold text-dark text-sm">Lost & Found Hub</h4>
                                                        <p class="text-gray-500 text-xs">1 hour ago</p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-sm mb-2">Hi Samantha, please use the "Claim This Item" button above and provide the IMEI number or serial number of your device for verification. You can find this in your original purchase receipt or on the box.</p>
                                                <div class="flex items-center space-x-3 text-xs text-gray-500">
                                                    <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-thumbs-up"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-comment"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reply 2 -->
                                    <div class="flex space-x-3">
                                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                            RK
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-gray-50 rounded-lg p-3">
                                                <div class="flex justify-between items-start mb-1">
                                                    <div>
                                                        <h4 class="font-bold text-dark text-sm">Ravi Kumar</h4>
                                                        <p class="text-gray-500 text-xs">45 minutes ago</p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-sm mb-2">If it's yours, you should be able to describe the lock screen wallpaper in more detail. The finder can verify without unlocking the phone.</p>
                                                <div class="flex items-center space-x-3 text-xs text-gray-500">
                                                    <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-thumbs-up"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-comment"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Reply 3 -->
                                    <div class="flex space-x-3">
                                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                            SP
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-gray-50 rounded-lg p-3">
                                                <div class="flex justify-between items-start mb-1">
                                                    <div>
                                                        <h4 class="font-bold text-dark text-sm">Samantha Perera</h4>
                                                        <p class="text-gray-500 text-xs">30 minutes ago</p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-sm mb-2">Thanks both! The wallpaper is a photo of my dog Max, a golden retriever, sitting on a beach. He's wearing a red collar. I'll submit the claim form now with my IMEI number.</p>
                                                <div class="flex items-center space-x-3 text-xs text-gray-500">
                                                    <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-thumbs-up"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-comment"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="comment-box">
                        <div class="flex space-x-3">
                            <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">
                                MJ
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h4 class="font-bold text-dark">Mohan Jayawardena</h4>
                                            <p class="text-gray-500 text-sm">5 hours ago</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                    <p class="text-gray-700 mb-3">I was at Galle Face around that time and saw someone looking for their phone near the kite flying area. Glad to see it was found! Hope it gets back to the owner soon.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>Like</span>
                                        </button>
                                        <button class="flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-comment"></i>
                                            <span>Reply</span>
                                        </button>
                                        <span>5 likes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 3 -->
                    <div class="comment-box">
                        <div class="flex space-x-3">
                            <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white font-bold">
                                NP
                            </div>
                            <div class="flex-1">
                                <div class="bg-gray-100 rounded-lg p-4">
                                    <div class="flex justify-between items-start mb-2">
                                        <div>
                                            <h4 class="font-bold text-dark">Nimal Perera</h4>
                                            <p class="text-gray-500 text-sm">1 day ago</p>
                                        </div>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </button>
                                    </div>
                                    <p class="text-gray-700 mb-3">Is there any way to contact the finder directly? I have some information that might help identify the owner.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-thumbs-up"></i>
                                            <span>Like</span>
                                        </button>
                                        <button class="flex items-center space-x-1 hover:text-primary transition">
                                            <i class="far fa-comment"></i>
                                            <span>Reply</span>
                                        </button>
                                        <span>2 likes</span>
                                    </div>
                                </div>

                                <!-- Reply -->
                                <div class="comment-reply mt-4">
                                    <div class="flex space-x-3">
                                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                                            LF
                                        </div>
                                        <div class="flex-1">
                                            <div class="bg-gray-50 rounded-lg p-3">
                                                <div class="flex justify-between items-start mb-1">
                                                    <div>
                                                        <h4 class="font-bold text-dark text-sm">Lost & Found Hub</h4>
                                                        <p class="text-gray-500 text-xs">1 day ago</p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-sm mb-2">Hi Nimal, you can use the "Contact Finder" button above to send a secure message. All communications are monitored to ensure safety and privacy.</p>
                                                <div class="flex items-center space-x-3 text-xs text-gray-500">
                                                    <button class="like-btn flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-thumbs-up"></i>
                                                        <span>Like</span>
                                                    </button>
                                                    <button class="flex items-center space-x-1 hover:text-primary transition">
                                                        <i class="far fa-comment"></i>
                                                        <span>Reply</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Comments -->
                <div class="text-center mt-6">
                    <button class="border border-gray-300 text-gray-700 hover:bg-gray-100 px-4 py-2 rounded-lg font-medium transition duration-300">
                        Load More Comments
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Items -->
        <div class="mt-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold text-dark">Similar Found Items</h2>
                <a href="found-items.html" class="text-primary hover:text-secondary font-medium transition">View All</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Related Item 1 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-purple-400 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-mobile-alt text-4xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1">Samsung Galaxy S21</h3>
                        <p class="text-gray-600 text-sm mb-2">Found in Kandy City Center</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">2 days ago</span>
                            <button class="text-primary hover:text-secondary text-sm font-medium transition">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Related Item 2 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-green-400 to-green-600 flex items-center justify-center">
                            <i class="fas fa-tablet-alt text-4xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1">iPad Air</h3>
                        <p class="text-gray-600 text-sm mb-2">Found at University of Colombo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">3 days ago</span>
                            <button class="text-primary hover:text-secondary text-sm font-medium transition">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Related Item 3 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-headphones text-4xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1">Wireless Earbuds</h3>
                        <p class="text-gray-600 text-sm mb-2">Found in a bus from Colombo</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">4 days ago</span>
                            <button class="text-primary hover:text-secondary text-sm font-medium transition">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Related Item 4 -->
                <div class="item-card bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="h-40 bg-gray-200 relative">
                        <div class="w-full h-full bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                            <i class="fas fa-laptop text-4xl text-white opacity-80"></i>
                        </div>
                        <div class="absolute top-3 left-3 status-found text-xs font-medium px-2 py-1 rounded">FOUND</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-dark mb-1">MacBook Air</h3>
                        <p class="text-gray-600 text-sm mb-2">Found at a coffee shop, Galle</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm font-medium text-gray-500">1 week ago</span>
                            <button class="text-primary hover:text-secondary text-sm font-medium transition">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12 mt-12">
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