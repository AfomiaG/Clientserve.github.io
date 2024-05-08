const images = document.querySelectorAll('.slideshow-images img');
let i = 0;

function nextImage() {
  images[i].style.transform = 'translateX(-100%)';
  i = (i + 1) % images.length;
  images[i].style.transform = 'translateX(0)';
}

setInterval(nextImage, 5000); // Change image every 5 seconds