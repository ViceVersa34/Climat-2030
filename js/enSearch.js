// -------------------------------------- <RECHERHCER> --------------------------------------

const searchInput = document.getElementById('search-input');
const suggestionsList = document.getElementById('suggestions-list');

const words = ['Home', 'The Pegagogical Club', 'The Social Club', 'The Climate Club', 'The Humour Club', 'The Forest Club', 'The Forest Club AF', 'The Forest Club Student', 'Learn more', 'Contact us', 'CGU'];

const pageUrls = {
    "Home": "/home",
    "The Pegagogical Club": "/the-pedagogical-club",
    "The Social Club": "/the-social-club",
    "The Climate Club": "/the-social-club#climate-club",
    "The Humour Club": "/the-social-club#humour-club",
    "The Forest Club": "/forest-club",
    "The Forest Club AF": "/forest-club#AF",
    "The Forest Club Student": "/forest-club#etudiants",
    "Learn more": "/more-about-climat-2030",
    "Contact us": "/contact-us",
    "CGU": "/en-CGU"
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