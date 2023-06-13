function miseEnForme() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    var divElement = document.getElementById("miseEnForme");
    divElement.classList.toggle("invisible");
  }

// Récupérer tous les boutons sélectionnables
const selectableButtons = document.querySelectorAll('.selectable-button');
const forbiddenCombos = ['t1t2', 'oy'];

// Ajouter un gestionnaire d'événement de clic à chaque bouton sélectionnable
selectableButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Vérifier les contraintes de sélection
    const buttonId = button.id;
    const isButtonSelected = button.classList.toggle('active');
  
    // Vérifier les combinaisons interdites
    if (forbiddenCombos.some(combo => combo.includes(buttonId))) {
      const conflictingButtonId = forbiddenCombos.find(combo => combo.includes(buttonId) && combo !== buttonId);
      const conflictingButton = document.getElementById(`button-${conflictingButtonId}`);
      
      if (isButtonSelected && conflictingButton.classList.contains('active')) {
        conflictingButton.classList.remove('active');
      }
    }

    // Vérifier les contraintes de sélection spécifiques à "o" et "y"
    if (buttonId === 'button-o' && isButtonSelected) {
      const yButton = document.getElementById('button-y');
      if (yButton.classList.contains('active')) {
        yButton.classList.remove('active');
      }
    }

    if (buttonId === 'button-y' && isButtonSelected) {
      const oButton = document.getElementById('button-o');
      if (oButton.classList.contains('active')) {
        oButton.classList.remove('active');
      }
    }

    // Vérifier les contraintes de sélection spécifiques à "t1" et "t2"
    if (buttonId === 'button-t1' && isButtonSelected) {
      const t2Button = document.getElementById('button-t2');
      if (t2Button.classList.contains('active')) {
        t2Button.classList.remove('active');
      }
    }

    if (buttonId === 'button-t2' && isButtonSelected) {
      const t1Button = document.getElementById('button-t1');
      if (t1Button.classList.contains('active')) {
        t1Button.classList.remove('active');
      }
    }
  });
});

// Générer le texte à copier
const copyButton = document.getElementById('copyButton');
const copyBrButton = document.getElementById('copyBrButton');
const copyClosingButton = document.getElementById('copyClosingButton');
const outputText = document.getElementById('outputText');

copyButton.addEventListener('click', () => {
  const selectedButtons = Array.from(selectableButtons)
    .filter(button => button.classList.contains('active'))
    .map(button => button.id.replace('button-', ''));
  
  const copiedText = '{{' + selectedButtons.join('-') + '}}';
  copyToClipboard(copiedText);
});

copyClosingButton.addEventListener('click', () => {
  const copiedText = '{{/}}';
  copyToClipboard(copiedText);
});

copyBrButton.addEventListener('click', () => {
  const copiedText = '<br>';
  copyToClipboard(copiedText);
});

// Fonction pour copier le texte dans le presse-papiers
function copyToClipboard(text) {
  const textarea = document.createElement('textarea');
  textarea.value = text;
  textarea.style.position = 'fixed';
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand('copy');
  document.body.removeChild(textarea);

  outputText.value = text;
}







// miseEnForme

// Récupérer la div déplaçable
const movableDiv = document.getElementById('miseEnForme');

// Variables pour stocker les coordonnées de départ du mouvement
let startX = 0;
let startY = 0;

// Fonction de gestionnaire d'événement pour le début du mouvement
function startDrag(event) {
  startX = event.clientX - movableDiv.offsetLeft;
  startY = event.clientY - movableDiv.offsetTop;

  // Ajouter un écouteur d'événement pour suivre le mouvement de la souris
  document.addEventListener('mousemove', drag);

  // Ajouter un écouteur d'événement pour détecter la fin du mouvement
  document.addEventListener('mouseup', endDrag);
}

// Fonction de gestionnaire d'événement pour le déplacement
function drag(event) {
  event.preventDefault();

  // Calculer les nouvelles coordonnées en fonction du mouvement de la souris
  const newPosX = event.clientX - startX;
  let newPosY = event.clientY - startY;

  // Vérifier si la souris est en bas de l'écran
  const windowHeight = window.innerHeight;
  const scrollY = window.scrollY || window.pageYOffset;
  const bottomThreshold = windowHeight - 50; // Seuil de 50 pixels depuis le bas de l'écran

  if (event.clientY > bottomThreshold) {
    // Faire défiler la page vers le bas
    window.scrollTo(0, scrollY + 10); // Faire défiler de 10 pixels vers le bas
  }

  // Vérifier si la souris est en haut de l'écran
  const topThreshold = 50; // Seuil de 50 pixels depuis le haut de l'écran

  if (event.clientY < topThreshold) {
    // Faire défiler la page vers le haut
    window.scrollTo(0, scrollY - 10); // Faire défiler de 10 pixels vers le haut
  }

  // Ajuster la position de la div en tenant compte du défilement de la page
  const scrolledY = window.scrollY || window.pageYOffset;
  newPosY += scrolledY;

  // Appliquer les nouvelles coordonnées à la div
  movableDiv.style.left = `${newPosX}px`;
  movableDiv.style.top = `${newPosY}px`;
}

// Fonction de gestionnaire d'événement pour la fin du mouvement
function endDrag(event) {
  // Supprimer les écouteurs d'événement
  document.removeEventListener('mousemove', drag);
  document.removeEventListener('mouseup', endDrag);
}

// Ajouter un écouteur d'événement pour le début du mouvement
movableDiv.addEventListener('mousedown', startDrag);
