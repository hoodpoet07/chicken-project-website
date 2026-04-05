const hero = document.getElementById('home');
const images = [
    'url("backgrounds/bimage1.jpg")',
    'url("backgrounds/bimage2.jpg")',
    'url("backgrounds/bimage3.jpg")',
    'url("backgrounds/bimage4.jpg")',
    'url("backgrounds/bimage5.jpg")',
    'url("backgrounds/bimage6.jpg")',
    'url("backgrounds/bimage7.jpg")',
    'url("backgrounds/bimage8.jpg")',
    'url("backgrounds/bimage9.jpg")',
    'url("backgrounds/bimagex.jpg")'
    
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