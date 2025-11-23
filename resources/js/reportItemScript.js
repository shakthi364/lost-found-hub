   // Multi-step form functionality
        let currentStep = 1;
        const totalSteps = 4;

        // Update step indicators
        function updateStepIndicators() {
            document.querySelectorAll('.step-indicator').forEach((indicator, index) => {
                const stepNumber = index + 1;
                if (stepNumber < currentStep) {
                    indicator.classList.remove('active');
                    indicator.classList.add('completed');
                } else if (stepNumber === currentStep) {
                    indicator.classList.add('active');
                    indicator.classList.remove('completed');
                } else {
                    indicator.classList.remove('active', 'completed');
                }
            });

            // Update step lines
            document.querySelectorAll('.step-line').forEach((line, index) => {
                if (index + 1 < currentStep) {
                    line.classList.add('completed');
                } else {
                    line.classList.remove('completed');
                }
            });

            // Update step text
            document.querySelector('.text-gray-600 span').textContent = `Step ${currentStep} of ${totalSteps}`;
        }

        // Show current step
        function showStep(step) {
            document.querySelectorAll('.form-step').forEach(formStep => {
                formStep.classList.remove('active');
            });
            document.getElementById(`step${step}`).classList.add('active');
        }

        // Next step button
        document.querySelectorAll('.next-step').forEach(button => {
            button.addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    currentStep++;
                    updateStepIndicators();
                    showStep(currentStep);
                }
            });
        });

        // Previous step button
        document.querySelectorAll('.prev-step').forEach(button => {
            button.addEventListener('click', function() {
                currentStep--;
                updateStepIndicators();
                showStep(currentStep);
            });
        });

        // Form validation for each step
        function validateStep(step) {
            let isValid = true;
            
            if (step === 1) {
                const categorySelected = document.querySelector('input[name="category"]:checked');
                if (!categorySelected) {
                    alert('Please select a category for your item');
                    isValid = false;
                }
            } else if (step === 2) {
                const itemTitle = document.getElementById('itemTitle').value;
                const description = document.getElementById('description').value;
                
                if (!itemTitle.trim()) {
                    alert('Please provide a title for your item');
                    isValid = false;
                } else if (!description.trim()) {
                    alert('Please provide a description of your item');
                    isValid = false;
                }
            } else if (step === 3) {
                const date = document.getElementById('date').value;
                const location = document.getElementById('location').value;
                
                if (!date) {
                    alert('Please select the date when the item was lost/found');
                    isValid = false;
                } else if (!location.trim()) {
                    alert('Please provide the location where the item was lost/found');
                    isValid = false;
                }
            }
            
            return isValid;
        }

        // Form submission
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const termsAccepted = document.getElementById('terms').checked;
            if (!termsAccepted) {
                alert('Please accept the Terms of Service and Privacy Policy');
                return;
            }
            
            // In a real application, you would submit the form data to a server here
            alert('Your report has been submitted successfully! We will notify you if there are any matches.');
            
            // Reset form and redirect
            setTimeout(() => {
                window.location.href = 'index.html';
            }, 2000);
        });

        // Image upload functionality
        document.getElementById('browseImages').addEventListener('click', function() {
            document.getElementById('itemImages').click();
        });

        document.getElementById('itemImages').addEventListener('change', function(e) {
            const files = e.target.files;
            const previewContainer = document.getElementById('imagePreviews');
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                if (file.type.match('image.*')) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        const preview = document.createElement('div');
                        preview.className = 'image-preview';
                        preview.innerHTML = `
                            <img src="${e.target.result}" alt="Preview">
                            <div class="remove-image">&times;</div>
                        `;
                        
                        previewContainer.appendChild(preview);
                        
                        // Add remove functionality
                        preview.querySelector('.remove-image').addEventListener('click', function() {
                            preview.remove();
                        });
                    };
                    
                    reader.readAsDataURL(file);
                }
            }
        });

        // Category selection styling
        document.querySelectorAll('.category-card input[type="radio"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.category-card').forEach(card => {
                    card.classList.remove('selected');
                });
                
                if (this.checked) {
                    this.closest('.category-card').classList.add('selected');
                }
            });
        });

        // Item type selection styling
        document.querySelectorAll('input[name="itemType"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('input[name="itemType"] + label').forEach(label => {
                    label.classList.remove('border-primary');
                });
                
                if (this.checked) {
                    this.nextElementSibling.classList.add('border-primary');
                }
            });
        });

        // Condition selection styling
        document.querySelectorAll('input[name="condition"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('input[name="condition"] + label').forEach(label => {
                    label.classList.remove('border-primary');
                });
                
                if (this.checked) {
                    this.nextElementSibling.classList.add('border-primary');
                }
            });
        });

        // Contact method selection styling
        document.querySelectorAll('input[name="contactMethod"]').forEach(radio => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('input[name="contactMethod"] + label').forEach(label => {
                    label.classList.remove('border-primary');
                });
                
                if (this.checked) {
                    this.nextElementSibling.classList.add('border-primary');
                }
            });
        });

        // Initialize the form
        updateStepIndicators();
        showStep(currentStep);