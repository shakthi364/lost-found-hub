<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Item - Lost & Found Hub</title>

    @vite(['resources/css/reportItemStyle.css', 'resources/js/reportItemScript.js'])

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
                <a href="#" class="hover:text-primary transition">Browse Items</a>
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
                
                <!-- Progress Indicator (for multi-step form) -->
                <div class="hidden md:flex items-center space-x-4">
                    <div class="text-sm text-gray-600">
                        <span class="font-medium">Step 1 of 4</span>
                    </div>
                </div>
                
                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <div class="hidden md:flex items-center space-x-3">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white font-bold cursor-pointer">
                            JD
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="bg-gradient-to-r from-primary to-accent text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl md:text-3xl font-bold mb-2">Report an Item</h1>
            <p class="text-lg opacity-90 max-w-2xl mx-auto">Help reunite people with their belongings by reporting a lost or found item</p>
        </div>
    </section>

    <!-- Multi-step Form -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Progress Steps -->
            <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center flex-1">
                        <div class="step-indicator active">1</div>
                        <div class="step-line"></div>
                        <div class="step-indicator">2</div>
                        <div class="step-line"></div>
                        <div class="step-indicator">3</div>
                        <div class="step-line"></div>
                        <div class="step-indicator">4</div>
                    </div>
                </div>
                <div class="flex justify-between text-sm text-gray-600">
                    <span class="font-medium">Item Type</span>
                    <span>Details</span>
                    <span>Location</span>
                    <span>Contact Info</span>
                </div>
            </div>

            <!-- Form Steps -->
            <form id="reportForm" class="bg-white rounded-xl shadow-sm p-6">
                <!-- Step 1: Item Type -->
                <div class="form-step active" id="step1">
                    <h2 class="text-xl font-bold text-dark mb-6">What type of item are you reporting?</h2>
                    
                    <div class="mb-6">
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <input type="radio" id="lost" name="itemType" value="lost" class="hidden" checked>
                                <label for="lost" class="flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <div class="text-center">
                                        <i class="fas fa-search text-2xl text-red-500 mb-2"></i>
                                        <h3 class="font-bold text-dark">Lost Item</h3>
                                        <p class="text-sm text-gray-600">I lost something</p>
                                    </div>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="found" name="itemType" value="found" class="hidden">
                                <label for="found" class="flex items-center justify-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <div class="text-center">
                                        <i class="fas fa-hand-holding-heart text-2xl text-green-500 mb-2"></i>
                                        <h3 class="font-bold text-dark">Found Item</h3>
                                        <p class="text-sm text-gray-600">I found something</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h3 class="font-bold text-dark mb-4">Select Category</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 mb-8">
                        <!-- Category 1 -->
                        <div class="category-card">
                            <input type="radio" id="cat-electronics" name="category" value="electronics" class="hidden">
                            <label for="cat-electronics" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Electronics</span>
                            </label>
                        </div>
                        
                        <!-- Category 2 -->
                        <div class="category-card">
                            <input type="radio" id="cat-personal" name="category" value="personal" class="hidden">
                            <label for="cat-personal" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-wallet"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Personal Items</span>
                            </label>
                        </div>
                        
                        <!-- Category 3 -->
                        <div class="category-card">
                            <input type="radio" id="cat-keys" name="category" value="keys" class="hidden">
                            <label for="cat-keys" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-key"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Keys</span>
                            </label>
                        </div>
                        
                        <!-- Category 4 -->
                        <div class="category-card">
                            <input type="radio" id="cat-jewelry" name="category" value="jewelry" class="hidden">
                            <label for="cat-jewelry" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-gem"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Jewelry</span>
                            </label>
                        </div>
                        
                        <!-- Category 5 -->
                        <div class="category-card">
                            <input type="radio" id="cat-documents" name="category" value="documents" class="hidden">
                            <label for="cat-documents" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Documents</span>
                            </label>
                        </div>
                        
                        <!-- Category 6 -->
                        <div class="category-card">
                            <input type="radio" id="cat-pets" name="category" value="pets" class="hidden">
                            <label for="cat-pets" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Pets</span>
                            </label>
                        </div>
                        
                        <!-- Category 7 -->
                        <div class="category-card">
                            <input type="radio" id="cat-bags" name="category" value="bags" class="hidden">
                            <label for="cat-bags" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Bags & Luggage</span>
                            </label>
                        </div>
                        
                        <!-- Category 8 -->
                        <div class="category-card">
                            <input type="radio" id="cat-other" name="category" value="other" class="hidden">
                            <label for="cat-other" class="flex flex-col items-center p-4 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white text-xl mb-2 category-icon">
                                    <i class="fas fa-question"></i>
                                </div>
                                <span class="font-medium text-dark text-sm text-center">Other</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="button" class="next-step bg-primary hover:bg-secondary text-white px-6 py-3 rounded-lg font-bold transition duration-300">
                            Next: Item Details <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 2: Item Details -->
                <div class="form-step" id="step2">
                    <h2 class="text-xl font-bold text-dark mb-6">Tell us about the item</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="itemTitle" class="block text-sm font-medium text-gray-700 mb-2">Item Title *</label>
                            <input type="text" id="itemTitle" name="itemTitle" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g., iPhone 13 Pro, Leather Wallet">
                        </div>
                        
                        <div>
                            <label for="brand" class="block text-sm font-medium text-gray-700 mb-2">Brand (Optional)</label>
                            <input type="text" id="brand" name="brand" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g., Apple, Samsung">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Provide a detailed description of the item including color, size, condition, and any distinguishing features"></textarea>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Item Condition</label>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div>
                                <input type="radio" id="condition-new" name="condition" value="new" class="hidden">
                                <label for="condition-new" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <span class="font-medium">New</span>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="condition-good" name="condition" value="good" class="hidden" checked>
                                <label for="condition-good" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <span class="font-medium">Good</span>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="condition-fair" name="condition" value="fair" class="hidden">
                                <label for="condition-fair" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <span class="font-medium">Fair</span>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="condition-poor" name="condition" value="poor" class="hidden">
                                <label for="condition-poor" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <span class="font-medium">Poor</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload Photos (Max 5)</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-3"></i>
                            <p class="text-gray-600 mb-2">Drag & drop images here or click to browse</p>
                            <p class="text-sm text-gray-500">JPEG, PNG up to 5MB each</p>
                            <input type="file" id="itemImages" name="itemImages" class="hidden" multiple accept="image/*">
                            <button type="button" id="browseImages" class="mt-4 bg-primary hover:bg-secondary text-white px-4 py-2 rounded-lg font-medium transition duration-300">
                                Browse Files
                            </button>
                        </div>
                        <div id="imagePreviews" class="mt-4 flex flex-wrap"></div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-bold transition duration-300">
                            <i class="fas fa-arrow-left mr-2"></i> Back
                        </button>
                        <button type="button" class="next-step bg-primary hover:bg-secondary text-white px-6 py-3 rounded-lg font-bold transition duration-300">
                            Next: Location <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 3: Location -->
                <div class="form-step" id="step3">
                    <h2 class="text-xl font-bold text-dark mb-6">Where did it happen?</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="date" class="block text-sm font-medium text-gray-700 mb-2">Date *</label>
                            <input type="date" id="date" name="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                        
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-700 mb-2">Approximate Time</label>
                            <input type="time" id="time" name="time" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-2">Location *</label>
                        <input type="text" id="location" name="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="e.g., Galle Face Green, Colombo">
                    </div>
                    
                    <div class="mb-6">
                        <label for="specificLocation" class="block text-sm font-medium text-gray-700 mb-2">Specific Location Details</label>
                        <textarea id="specificLocation" name="specificLocation" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Provide more specific details about where the item was lost/found (e.g., near the food stalls, on a bench, in a taxi)"></textarea>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Location on Map</label>
                        <div class="border border-gray-300 rounded-lg overflow-hidden h-64">
                            <div class="map-placeholder w-full h-full flex items-center justify-center text-white">
                                <div class="text-center">
                                    <i class="fas fa-map-marker-alt text-3xl mb-2"></i>
                                    <p>Interactive Map</p>
                                    <p class="text-sm opacity-80 mt-1">Click to set location</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Click on the map to mark the exact location (optional but recommended)</p>
                    </div>

                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-bold transition duration-300">
                            <i class="fas fa-arrow-left mr-2"></i> Back
                        </button>
                        <button type="button" class="next-step bg-primary hover:bg-secondary text-white px-6 py-3 rounded-lg font-bold transition duration-300">
                            Next: Contact Info <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Step 4: Contact Information -->
                <div class="form-step" id="step4">
                    <h2 class="text-xl font-bold text-dark mb-6">How can people contact you?</h2>
                    
                    <div class="bg-blue-50 rounded-lg p-4 mb-6">
                        <div class="flex items-start">
                            <i class="fas fa-shield-alt text-blue-500 mt-1 mr-3"></i>
                            <div>
                                <h4 class="font-bold text-blue-800">Your Privacy is Protected</h4>
                                <p class="text-blue-700 text-sm mt-1">We will never share your personal contact information. All communications go through our secure messaging system.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="contactName" class="block text-sm font-medium text-gray-700 mb-2">Your Name *</label>
                            <input type="text" id="contactName" name="contactName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="How should we address you?">
                        </div>
                        
                        <div>
                            <label for="contactEmail" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="contactEmail" name="contactEmail" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Your email for notifications">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="contactPhone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number (Optional)</label>
                        <input type="tel" id="contactPhone" name="contactPhone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary" placeholder="For urgent contact only">
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Contact Method</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <input type="radio" id="contact-email" name="contactMethod" value="email" class="hidden" checked>
                                <label for="contact-email" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span class="font-medium">Email</span>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="contact-message" name="contactMethod" value="message" class="hidden">
                                <label for="contact-message" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <i class="fas fa-comment mr-2"></i>
                                    <span class="font-medium">Message</span>
                                </label>
                            </div>
                            <div>
                                <input type="radio" id="contact-both" name="contactMethod" value="both" class="hidden">
                                <label for="contact-both" class="flex items-center justify-center p-3 border-2 border-gray-300 rounded-lg cursor-pointer hover:border-primary transition">
                                    <i class="fas fa-comments mr-2"></i>
                                    <span class="font-medium">Both</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" name="terms" class="mt-1 mr-3 rounded text-primary focus:ring-primary">
                            <label for="terms" class="text-sm text-gray-700">
                                I agree to the <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>. I confirm that the information provided is accurate to the best of my knowledge.
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-between">
                        <button type="button" class="prev-step bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-3 rounded-lg font-bold transition duration-300">
                            <i class="fas fa-arrow-left mr-2"></i> Back
                        </button>
                        <button type="submit" class="bg-primary hover:bg-secondary text-white px-6 py-3 rounded-lg font-bold transition duration-300">
                            Submit Report <i class="fas fa-check ml-2"></i>
                        </button>
                    </div>
                </div>
            </form>
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