// script.js
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.nav-dot');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

function showSlide(index) {
  // Loop back to the beginning or end if out of bounds
  if (index < 0) {
    index = slides.length - 1;
  } else if (index >= slides.length) {
    index = 0;
  }

  // Update slide position
  document.querySelector('.slides').style.transform = `translateX(-${index * 100}%)`;

  // Update active dot
  dots.forEach((dot, i) => dot.classList.toggle('active', i === index));

  currentSlide = index;
}

// Event listeners for dots
dots.forEach((dot, i) => {
  dot.addEventListener('click', () => showSlide(i));
});

// Event listeners for buttons
prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));

// Automatic slide change every 5 seconds
setInterval(() => {
  showSlide(currentSlide + 1);
}, 5000);
