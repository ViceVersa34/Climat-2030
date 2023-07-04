function filtres() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Récupération des éléments nécessaires à la fonction
    var divElement = document.getElementById("filtres");
    // Ajoute ou enlève la class 'invisible' à l'élément
    divElement.classList.toggle("invisible");
}

function afficherSort() {
    // Récupération des éléments nécessaires à la fonction
    var selectElement = document.getElementById("sort");
    var radio1Element = document.getElementById("radio1");
    var radio2Element = document.getElementById("radio2");

    if (selectElement.value === "") {
        // Masque les éléments
        radio1Element.style.display = "none";
        radio2Element.style.display = "none";
    } else {
        // Affiche les éléments
        radio1Element.style.display = "flex";
        radio2Element.style.display = "flex";
    }
}

function afficherSearch() {
    // Récupération des éléments nécessaires à la fonction
    var selectElement = document.getElementById("search");
    var radio1Element = document.getElementById("globalQuery");

    if (selectElement.value === "") {
        // Masque les éléments
        radio1Element.style.display = "none";
    } else {
        // Affiche les éléments
        radio1Element.style.display = "inline";
    }
}