 // Toggle filter sections
        document.querySelectorAll('.filter-toggle').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const options = this.nextElementSibling;
                options.classList.toggle('active');
                
                const icon = this.querySelector('i');
                if (options.classList.contains('active')) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });

        // Reset filters
        document.getElementById('resetFilters').addEventListener('click', function() {
            // Reset all checkboxes and radio buttons
            document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                checkbox.checked = false;
            });
            
            document.querySelectorAll('input[type="radio"]').forEach(radio => {
                if (radio.id.includes('any') || radio.id.includes('all')) {
                    radio.checked = true;
                } else {
                    radio.checked = false;
                }
            });
            
            // Reset search input
            document.querySelector('input[type="text"]').value = '';
            
            // Show confirmation message
            alert('All filters have been reset');
        });

        // Grid/List view toggle
        document.querySelectorAll('.bg-gray-200, .bg-primary').forEach(button => {
            button.addEventListener('click', function() {
                // Toggle active state
                document.querySelectorAll('.bg-gray-200, .bg-primary').forEach(btn => {
                    if (btn === this) {
                        btn.classList.remove('bg-gray-200', 'text-gray-700');
                        btn.classList.add('bg-primary', 'text-white');
                    } else {
                        btn.classList.remove('bg-primary', 'text-white');
                        btn.classList.add('bg-gray-200', 'text-gray-700');
                    }
                });
                
                // In a real implementation, this would change the layout
                // For this demo, we'll just show an alert
                if (this.querySelector('.fa-th')) {
                    alert('Switched to grid view');
                } else {
                    alert('Switched to list view');
                }
            });
        });