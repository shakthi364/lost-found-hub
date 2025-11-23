alert('Script loaded successfully!');

document.getElementById('locationBtn').addEventListener('click', function() {
    const locationDropdown = document.getElementById('locationDropdown');
    locationDropdown.classList.toggle('active');
});

document.addEventListener('click', function(event) {
    const locationButton = document.getElementById('locationBtn');
    const locationDropdown = document.getElementById('locationDropdown');

    if (!locationButton.contains(event.target) && !locationDropdown.contains(event.target)) {
        locationDropdown.classList.remove('active');
    }
});