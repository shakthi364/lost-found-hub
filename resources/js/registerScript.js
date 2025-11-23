  // Create animated particles
        function createParticles() {
            const container = document.getElementById('particles-container');
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size between 5 and 15px
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Random color
                const colors = ['#FF9A8B', '#FF6B6B', '#FFD93D', '#6BCF7F', '#4D96FF'];
                particle.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                
                // Random animation delay
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                container.appendChild(particle);
            }
        }
        
        // Toggle password visibility
        function setupPasswordToggle() {
            document.querySelectorAll('.password-toggle').forEach(icon => {
                icon.addEventListener('click', function() {
                    const input = this.closest('.relative').querySelector('input');
                    if (input.type === 'password') {
                        input.type = 'text';
                        this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                    } else {
                        input.type = 'password';
                        this.innerHTML = '<i class="fas fa-eye"></i>';
                    }
                });
            });
        }
        
        // Form tab switching
        function setupTabSwitching() {
            const tabs = document.querySelectorAll('.form-tab');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');
                    
                    // Update active tab
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Show corresponding form panel
                    document.querySelectorAll('.form-panel').forEach(panel => {
                        panel.classList.remove('active');
                    });
                    document.getElementById(`${tabId}-panel`).classList.add('active');
                });
            });
        }
        
        // Form validation and submission
        // function setupFormHandling() {
        //     const loginForm = document.getElementById('loginForm');
        //     const registerForm = document.getElementById('registerForm');
        //     const successMessage = document.getElementById('successMessage');
        //     const successText = document.getElementById('successText');
        //     const continueBtn = document.getElementById('continueBtn');
            
        //     // Login form submission
        //     loginForm.addEventListener('submit', function(e) {
        //         e.preventDefault();
                
        //         const email = document.getElementById('loginEmail').value;
        //         const password = document.getElementById('loginPassword').value;
                
        //         // Simple validation
        //         if (!email || !password) {
        //             shakeForm(loginForm);
        //             return;
        //         }
                
        //         // Simulate login process
        //         simulateLogin();
        //     });
            
        //     // Register form submission
        //     registerForm.addEventListener('submit', function(e) {
        //         e.preventDefault();
                
        //         const firstName = document.getElementById('firstName').value;
        //         const lastName = document.getElementById('lastName').value;
        //         const email = document.getElementById('registerEmail').value;
        //         const password = document.getElementById('registerPassword').value;
        //         const confirmPassword = document.getElementById('confirmPassword').value;
        //         const agreeTerms = document.getElementById('agreeTerms').checked;
                
        //         // Simple validation
        //         if (!firstName || !lastName || !email || !password || !confirmPassword) {
        //             shakeForm(registerForm);
        //             return;
        //         }
                
        //         if (password !== confirmPassword) {
        //             alert('Passwords do not match!');
        //             shakeForm(registerForm);
        //             return;
        //         }
                
        //         if (!agreeTerms) {
        //             alert('Please agree to the Terms of Service and Privacy Policy');
        //             return;
        //         }
                
        //         // Simulate registration process
        //         simulateRegistration();
        //     });
            
        //     // Continue button
        //     continueBtn.addEventListener('click', function() {
        //         // Redirect to home page or dashboard
        //         window.location.href = 'index.html';
        //     });
        // }
        
        // Shake form animation for validation errors
        // function shakeForm(form) {
        //     form.classList.add('shake');
        //     setTimeout(() => {
        //         form.classList.remove('shake');
        //     }, 500);
        // }
        
        // Simulate login process
        // function simulateLogin() {
        //     const formContainer = document.querySelector('.form-container');
        //     const successMessage = document.getElementById('successMessage');
        //     const successText = document.getElementById('successText');
            
        //     // Hide form and show success message
        //     formContainer.style.opacity = '0';
        //     setTimeout(() => {
        //         successMessage.classList.remove('hidden');
        //         successText.textContent = 'You have successfully signed in!';
        //     }, 500);
        // }
        
        // Simulate registration process
        // function simulateRegistration() {
        //     const formContainer = document.querySelector('.form-container');
        //     const successMessage = document.getElementById('successMessage');
        //     const successText = document.getElementById('successText');
            
        //     // Hide form and show success message
        //     formContainer.style.opacity = '0';
        //     setTimeout(() => {
        //         successMessage.classList.remove('hidden');
        //         successText.textContent = 'Your account has been created successfully!';
        //     }, 500);
        // }
        
        // Google login simulation
        // function setupGoogleLogin() {
        //     document.querySelectorAll('.btn-google').forEach(button => {
        //         button.addEventListener('click', function() {
        //             // In a real app, this would trigger Google OAuth flow
        //             alert('Google authentication would open in a real application');
                    
        //             // For demo purposes, simulate successful Google login
        //             const formContainer = document.querySelector('.form-container');
        //             const successMessage = document.getElementById('successMessage');
        //             const successText = document.getElementById('successText');
                    
        //             formContainer.style.opacity = '0';
        //             setTimeout(() => {
        //                 successMessage.classList.remove('hidden');
        //                 successText.textContent = 'You have successfully signed in with Google!';
        //             }, 500);
        //         });
        //     });
        // }
        
        // Initialize everything when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            setupPasswordToggle();
            setupTabSwitching();
            // setupFormHandling();
            // setupGoogleLogin();
        });