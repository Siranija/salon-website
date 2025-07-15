let currentReviewIndex = 0;
const reviews = document.querySelectorAll(".review");

function updateReviews() {
    reviews.forEach((review, index) => {
        review.classList.toggle("active", index === currentReviewIndex);
    });
}

function nextReview() {
    currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
    updateReviews();
}

function prevReview() {
    currentReviewIndex = (currentReviewIndex - 1 + reviews.length) % reviews.length;
    updateReviews();
}

// Initialize first review as visible
updateReviews();




// Slideshow function
let slideIndex = 0;
showSlides(); // Start the slideshow

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // Hide all images
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1; // Reset to first image
    }
    slides[slideIndex - 1].style.display = "block"; // Show the current image
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

// Add event listener to trigger typing on click
window.addEventListener("load", function () {
    const clickableElement = document.getElementById("click-to-type");
    const textToType = "Enhance your natural elegance with personalized, high-quality treatments!";

    clickableElement.addEventListener("click", function () {
        clickableElement.innerHTML = ""; // Clear the text before typing
        typeText(clickableElement, textToType); // Start typing effect
    });
});
