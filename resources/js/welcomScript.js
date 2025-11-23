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