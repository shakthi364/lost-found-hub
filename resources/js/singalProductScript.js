// Like button functionality
document.querySelectorAll('.like-btn').forEach(button => {
    button.addEventListener('click', function () {
        this.classList.toggle('active');

        const icon = this.querySelector('i');
        if (this.classList.contains('active')) {
            icon.classList.remove('far', 'fa-thumbs-up');
            icon.classList.add('fas', 'fa-thumbs-up');
        } else {
            icon.classList.remove('fas', 'fa-thumbs-up');
            icon.classList.add('far', 'fa-thumbs-up');
        }
    });
});

// Reply button functionality
document.querySelectorAll('button:contains("Reply")').forEach(button => {
    button.addEventListener('click', function () {
        const commentBox = this.closest('.comment-box');
        const replySection = commentBox.querySelector('.comment-reply');

        if (replySection) {
            // Check if there's already a reply input
            if (!replySection.querySelector('.reply-input')) {
                const replyInput = document.createElement('div');
                replyInput.className = 'reply-input flex space-x-3 mt-3';
                replyInput.innerHTML = `
                            <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white text-xs font-bold">
                                JD
                            </div>
                            <div class="flex-1">
                                <textarea placeholder="Write a reply..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary resize-none text-sm" rows="2"></textarea>
                                <div class="flex justify-end mt-2">
                                    <button class="bg-primary hover:bg-secondary text-white px-3 py-1 rounded text-sm font-medium transition duration-300">
                                        Post Reply
                                    </button>
                                </div>
                            </div>
                        `;
                replySection.appendChild(replyInput);
            }
        }
    });
});

// Image gallery functionality
document.querySelectorAll('.image-gallery > div:not(.main-image)').forEach(thumb => {
    thumb.addEventListener('click', function () {
        // In a real implementation, this would switch the main image
        alert('Image would change to show different angle of the item');
    });
});