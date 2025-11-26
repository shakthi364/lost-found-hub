<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Lost & Found Hub</title>

    @vite(['resources/css/registerStyle.css', 'resources/js/registerScript.js'])

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
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <!-- Background Animation Elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="floating-element absolute top-1/4 left-1/4 w-20 h-20 bg-yellow-400 rounded-full opacity-20"></div>
        <div class="floating-element absolute top-1/3 right-1/4 w-16 h-16 bg-pink-500 rounded-full opacity-30"></div>
        <div class="floating-element absolute bottom-1/4 left-1/3 w-24 h-24 bg-green-400 rounded-full opacity-25"></div>
        <div class="floating-element absolute bottom-1/3 right-1/3 w-12 h-12 bg-blue-500 rounded-full opacity-40"></div>
        
        <!-- Animated particles -->
        <div id="particles-container"></div>
    </div>
    
    <!-- Main Container -->
    <div class="w-full max-w-md mx-auto z-10">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center space-x-3 mb-4">
                <a href="#">
                            <img src="{{asset('img/logo.png')}}" alt="Lost & Found Hub Logo" class="h-24">
                        </a>
            </div>
            <p class="text-white opacity-80">Reuniting people with their belongings</p>
        </div>
        
        <!-- Form Container -->
        <div class="form-container rounded-2xl shadow-2xl overflow-hidden">
            <!-- Form Tabs -->
            <div class="form-tabs">
                <div class="form-tab active" data-tab="login">
                    <span class="text-white font-medium">Sign In</span>
                </div>
                <div class="form-tab" data-tab="register">
                    <span class="text-white font-medium">Sign Up</span>
                </div>
            </div>
            
            <!-- Form Content -->
            <div class="form-content p-8">
                <!-- Login Form -->
                <div class="form-panel active" id="login-panel">
                    <h2 class="text-2xl font-bold text-white text-center mb-2">Welcome Back</h2>
                    <p class="text-white opacity-80 text-center mb-6">Sign in to your account</p>
                    
                    <!-- Google Login Button -->
                    <button class="btn-google w-full flex items-center justify-center space-x-3 py-3 px-4 rounded-xl mb-6 shadow-md">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" class="w-5 h-5">
                        <span class="text-gray-700 font-medium">Continue with Google</span>
                    </button>
                    
                    <div class="flex items-center my-6">
                        <div class="flex-1 h-px bg-white opacity-30"></div>
                        <span class="px-4 text-white opacity-70 text-sm">or</span>
                        <div class="flex-1 h-px bg-white opacity-30"></div>
                    </div>
                    
                    <!-- Login Form -->
                    <form id="loginForm">
                        <div class="mb-4">
                            <label for="loginEmail" class="block text-white opacity-80 mb-2">Email Address</label>
                            <div class="relative">
                                <input type="email" id="loginEmail" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="you@example.com" required>
                                <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="loginPassword" class="block text-white opacity-80 mb-2">Password</label>
                            <div class="relative">
                                <input type="password" id="loginPassword" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="••••••••" required>
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                                <button type="button" class="password-toggle absolute right-4 top-1/2 transform -translate-y-1/2 text-white opacity-70">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" id="rememberMe" class="w-4 h-4 rounded bg-white bg-opacity-10 border border-white border-opacity-20 text-purple-600 focus:ring-purple-500 focus:ring-opacity-25">
                                <label for="rememberMe" class="ml-2 text-white opacity-80 text-sm">Remember me</label>
                            </div>
                            <a href="#" class="text-white opacity-80 text-sm hover:underline">Forgot password?</a>
                        </div>
                        
                        <button type="submit" class="btn-primary w-full text-white py-3 rounded-xl font-bold mb-4 shadow-lg">
                            Sign In
                        </button>
                    </form>
                </div>
                
                <!-- Register Form -->
                <div class="form-panel" id="register-panel">
                    <h2 class="text-2xl font-bold text-white text-center mb-2">Create Account</h2>
                    <p class="text-white opacity-80 text-center mb-6">Join our community today</p>
                    
                    <!-- Google Login Button -->
                    <button class="btn-google w-full flex items-center justify-center space-x-3 py-3 px-4 rounded-xl mb-6 shadow-md">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google" class="w-5 h-5">
                        <span class="text-gray-700 font-medium">Continue with Google</span>
                    </button>
                    
                    <div class="flex items-center my-6">
                        <div class="flex-1 h-px bg-white opacity-30"></div>
                        <span class="px-4 text-white opacity-70 text-sm">or</span>
                        <div class="flex-1 h-px bg-white opacity-30"></div>
                    </div>
                    
                    <!-- Register Form -->
                    <form id="registerForm">
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div>
                                <label for="firstName" class="block text-white opacity-80 mb-2">First Name</label>
                                <div class="relative">
                                    <input type="text" id="firstName" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="John" required>
                                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                                </div>
                            </div>
                            
                            <div>
                                <label for="lastName" class="block text-white opacity-80 mb-2">Last Name</label>
                                <div class="relative">
                                    <input type="text" id="lastName" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="Doe" required>
                                    <i class="fas fa-user absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="registerEmail" class="block text-white opacity-80 mb-2">Email Address</label>
                            <div class="relative">
                                <input type="email" id="registerEmail" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="you@example.com" required>
                                <i class="fas fa-envelope absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="registerPassword" class="block text-white opacity-80 mb-2">Password</label>
                            <div class="relative">
                                <input type="password" id="registerPassword" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="••••••••" required>
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                                <button type="button" class="password-toggle absolute right-4 top-1/2 transform -translate-y-1/2 text-white opacity-70">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="confirmPassword" class="block text-white opacity-80 mb-2">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="confirmPassword" class="input-field w-full py-3 px-4 pl-12 rounded-xl bg-white bg-opacity-10 border border-white border-opacity-20 text-white placeholder-white placeholder-opacity-50 focus:outline-none focus:bg-opacity-20" placeholder="••••••••" required>
                                <i class="fas fa-lock absolute left-4 top-1/2 transform -translate-y-1/2 text-white opacity-70"></i>
                                <button type="button" class="password-toggle absolute right-4 top-1/2 transform -translate-y-1/2 text-white opacity-70">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex items-center mb-6">
                            <input type="checkbox" id="agreeTerms" class="w-4 h-4 rounded bg-white bg-opacity-10 border border-white border-opacity-20 text-purple-600 focus:ring-purple-500 focus:ring-opacity-25" required>
                            <label for="agreeTerms" class="ml-2 text-white opacity-80 text-sm">
                                I agree to the <a href="#" class="text-white font-bold hover:underline">Terms of Service</a> and <a href="#" class="text-white font-bold hover:underline">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-primary w-full text-white py-3 rounded-xl font-bold mb-4 shadow-lg">
                            Create Account
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Success Message (Hidden by default) -->
        <div id="successMessage" class="hidden mt-8 form-container rounded-2xl shadow-2xl p-8 text-center">
            <svg class="success-checkmark mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
            <h3 class="text-2xl font-bold text-white mb-2">Success!</h3>
            <p class="text-white opacity-80 mb-6" id="successText">Your account has been created successfully</p>
            <button id="continueBtn" class="btn-primary text-white py-3 px-8 rounded-xl font-bold shadow-lg">
                Continue
            </button>
        </div>
    </div>
</body>
</html>