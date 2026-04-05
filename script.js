const hero = document.getElementById('hero-section');
const images = [
    'url("farm1.jpg")',
    'url("farm2.jpg")',
    'url("farm3.jpg")'
];

let currentIndex = 0;

function changeBackground() {
    // Move to the next image in the list
    currentIndex = (currentIndex + 1) % images.length;
    
    // Apply the new image to the section
    hero.style.backgroundImage = images[currentIndex];
}

// Start the rotation: 5000ms = 5 seconds
setInterval(changeBackground, 5000);

// Set the initial image immediately
hero.style.backgroundImage = images[0];