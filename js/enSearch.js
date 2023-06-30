// -------------------------------------- <RECHERHCER> --------------------------------------

const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions-list');

const words = ['Home', 'The pegagogical club', 'The social club', 'The forest club', 'The humour', 'Learn more', 'Contact us', 'CGU'];

const pageUrls = {
    "Home": "/home",
    "The pegagogical club": "/the-pedagogical-club",
    "The social club": "/the-social-club",
    "The forest club": "/forest-club",
    "Learn more": "/more-about-climat-2030",
    "Contact us": "/contact-us",
    "CGU": "/enCGU"
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