// Récupération des éléments nécessaires à la fonction
const carouselContainer = document.querySelector('.carousel-book-container');
const carouselItems = carouselContainer.querySelectorAll('.carousel-book');
const currentPageElement = document.getElementById('current-page');
const totalPagesElement = document.getElementById('total-pages');

let currentIndex = 0;

// Fonction pour mettre à jour le carrousel
function updateCarousel() {
  carouselItems.forEach((item, index) => {
    if (index === currentIndex) {
      item.classList.add('active-carousel-book'); // Ajoute la classe 'active' à l'élément actuel
    } else {
      item.classList.remove('active-carousel-book'); // Supprime la classe 'active' des autres éléments
    }
  });

  // Mettre à jour le compteur de page
  currentPageElement.textContent = currentIndex + 1;
}

// Fonction pour passer à la diapositive suivante
function nextSlide() {
  currentIndex++;
  if (currentIndex >= carouselItems.length) {
    currentIndex = 0;
  }
  updateCarousel();
}

// Fonction pour passer à la diapositive précédente
function previousSlide() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = carouselItems.length - 1;
  }
  updateCarousel();
}

// Récupération des éléments nécessaires à la fonction
const nextButton = document.querySelector('.next-button');
const prevButton = document.querySelector('.prev-button');

nextButton.addEventListener('click', nextSlide);
prevButton.addEventListener('click', previousSlide);

updateCarousel(); // Affiche la première image comme active
totalPagesElement.textContent = carouselItems.length; // Définir le nombre total de pages


// Fonction pour zoomer sur une image
function zoomerImage(image) {
  // Créez un élément <div> pour afficher l'image zoomée
  var overlay = document.createElement("div");
  overlay.className = "overlay";
  
  // Créez un élément <img> pour contenir l'image zoomée
  var imageZoom = document.createElement("img");
  imageZoom.src = image.src;
  
  // Ajoutez l'élément <img> à l'élément <div>
  overlay.appendChild(imageZoom);
  
  // Ajoutez l'élément <div> à la page
  document.body.appendChild(overlay);
  
  // Ajoutez un gestionnaire d'événement de clic sur l'élément <div> pour fermer l'image zoomée
  overlay.onclick = function() {
    document.body.removeChild(overlay);
  };
}
