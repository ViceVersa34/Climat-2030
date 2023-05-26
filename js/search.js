// -------------------------------------- <RECHERHCER> --------------------------------------

const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions-list');

const words = ['Accueil', 'Académie du climat', 'Le social club', 'L\'exposition', 'L\'humour', 'S\'inscrire', 'En savoir plus', 'Contact', 'CGU'];

const pageUrls = {
    'Accueil': '/fr/',
    'Académie du climat': '/fr/academie-du-climat.php',
    'Le social club': '/fr/social-club.php',
    'L\'exposition': '/fr/exposition.php',
    'L\'humour': '/fr/humour.php',
    'S\'inscrire' : '/fr/inscription.php',
    'En savoir plus' : '/fr/en-savoir-plus.php',
    'Contact' : '/fr/contact.php',
    'CGU' : '/fr/CGU.php'
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

// -------------------------------------- </RECHERHCER> --------------------------------------