// -------------------------------------- <RECHERHCER> --------------------------------------

const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions-list');

const words = ['Accueil', 'Le Club Pédagogique', 'Le Club Social', 'Le Club Climat', 'Le Club Humour', 'Le Club Foret', 'Le Club Foret AF', 'Le Club Foret Étudiant', 'En savoir plus', 'Contact', 'CGU'];

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

searchInput.addEventListener('input', function () {
    const inputValue = searchInput.value.toLowerCase();
    const matchingWords = words.filter(word => word.toLowerCase().startsWith(inputValue));

    suggestionsList.innerHTML = '';

    matchingWords.forEach(function (word) {
        const li = document.createElement('li');
        li.textContent = word;
        suggestionsList.appendChild(li);
    });

    if (matchingWords.length > 0) {
        suggestionsList.style.display = 'block';
    } else {
        suggestionsList.style.display = 'none';
    }
});

suggestionsList.addEventListener('click', function (event) {
    if (event.target.tagName === 'LI') {
        const selectedSuggestion = event.target.textContent;
        const pageUrl = pageUrls[selectedSuggestion];
        if (pageUrl) {
            window.location.href = pageUrl;
        }
    }
});

function search() {
    var element1 = document.getElementById('search-container');
    var element2 = document.getElementById('searchActive');
    
    element1.classList.toggle("display");
    element2.classList.toggle("activeSearch");
}