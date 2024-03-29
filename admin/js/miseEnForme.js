function miseEnForme() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Récupération des éléments nécessaires à la fonction
    var divElement = document.getElementById("miseEnForme");
    divElement.classList.toggle("invisible");
}

// Récupérer tous les boutons sélectionnables
const selectableButtons = document.querySelectorAll('.selectable-button');
const groups = {
    t: ['button-t1', 'button-t2'],
    yonv: ['button-y', 'button-o', 'button-n', 'button-v']
};

// Ajouter un gestionnaire d'événement de clic à chaque bouton sélectionnable
selectableButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Vérifier les contraintes de sélection
        const buttonId = button.id;
        const isButtonSelected = button.classList.toggle('active');

        // Vérifier les groupes de boutons
        Object.keys(groups).forEach(group => {
            if (groups[group].includes(buttonId) && isButtonSelected) {
                groups[group].forEach(groupId => {
                    if (groupId !== buttonId) {
                        // Récupération des éléments nécessaires à la fonction
                        const conflictingButton = document.getElementById(groupId);
                        conflictingButton.classList.remove('active');
                    }
                });
            }
        });
    });
});

// Générer le texte à copier
// Récupération des éléments nécessaires à la fonction
const copyButton = document.getElementById('copyButton');
const copyBrButton = document.getElementById('copyBrButton');
const copyClosingButton = document.getElementById('copyClosingButton');
const outputText = document.getElementById('outputText');

// Générer le texte à copier lors du click sur le bouton "balise d'ouverture"
copyButton.addEventListener('click', () => {
    const selectedButtons = Array.from(selectableButtons)
    .filter(button => button.classList.contains('active'))
    .map(button => button.id.replace('button-', ''));
    
    const copiedText = '{{' + selectedButtons.join('-') + '}}';
    copyToClipboard(copiedText);
});

// Générer le texte à copier lors du click sur le bouton "balise de fermeture"
copyClosingButton.addEventListener('click', () => {
    const copiedText = '{{/}}';
    copyToClipboard(copiedText);
});

// Générer le texte à copier lors du click sur le bouton "balise de saut de ligne"
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
    const newPosY = event.clientY - startY;

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

// Appliquer une position fixe à la div
movableDiv.style.position = 'fixed';
