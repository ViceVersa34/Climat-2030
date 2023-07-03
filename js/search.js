// -------------------------------------- <RECHERHCER> --------------------------------------

// Récupération des éléments nécessaires à la fonction
const searchInput = document.getElementById('search-input'); // Champ de recherche
const suggestionsList = document.getElementById('suggestions-list'); // Liste des suggestions

// Liste des mots suggérés
const words = ['Accueil', 'Le Club Pédagogique', 'Le Club Social', 'Le Club Climat', 'Le Club Humour', 'Le Club Foret', 'Le Club Foret AF', 'Le Club Foret Étudiant', 'En savoir plus', 'Contact', 'CGU'];

// Correspondance entre les mots suggérés et les URLs des pages correspondantes
const pageUrls = {
    "Accueil": "/",
    "Le Club Pédagogique": "/club-pedagogique",
    "Le Club Social": "/club-social",
    "Le Club Climat": "/club-social#club-climat",
    "Le Club Humour": "/club-social#club-humour",
    "Le Club Foret": "/club-foret",
    "Le Club Foret AF": "/club-foret#AF",
    "Le Club Foret Étudiant": "/club-foret#etudiants",
    "En savoir plus" : "/en-savoir-plus",
    "Contact" : "/contact",
    "CGU" : "/CGU"
};

// Écouteur d'événement pour la saisie dans le champ de recherche
searchInput.addEventListener('input', function () {
    const inputValue = searchInput.value.toLowerCase(); // Valeur saisie dans le champ de recherche, en minuscules
    const matchingWords = words.filter(word => word.toLowerCase().startsWith(inputValue)); // Filtrage des mots suggérés commençant par la valeur saisie

    suggestionsList.innerHTML = ''; // Réinitialisation de la liste des suggestions

    // Création des éléments de liste pour chaque mot correspondant
    matchingWords.forEach(function (word) {
        const li = document.createElement('li');
        li.textContent = word;
        suggestionsList.appendChild(li);
    });

    // Affichage ou masquage de la liste des suggestions en fonction du nombre de mots correspondants
    if (matchingWords.length > 0) {
        suggestionsList.style.display = 'block';
    } else {
        suggestionsList.style.display = 'none';
    }
});

// Écouteur d'événement pour le clic sur la liste des suggestions
suggestionsList.addEventListener('click', function (event) {
    if (event.target.tagName === 'LI') {
        const selectedSuggestion = event.target.textContent; // Mot sélectionné dans la liste des suggestions
        const pageUrl = pageUrls[selectedSuggestion]; // URL de la page correspondant au mot sélectionné
        if (pageUrl) {
            window.location.href = pageUrl; // Redirection vers l'URL de la page correspondante
        }
    }
});

// Fonction de recherche
function search() {
    var element1 = document.getElementById('search-container'); // Élément conteneur de la recherche
    var element2 = document.getElementById('searchActive'); // Élément actif de la recherche
    
    // Basculer l'affichage et l'état actif de la recherche
    element1.classList.toggle("display");
    element2.classList.toggle("activeSearch");
}