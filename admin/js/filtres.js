function filtres() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    var divElement = document.getElementById("filtres");
    divElement.classList.toggle("invisible");
}

function afficherSort() {
    var selectElement = document.getElementById("sort");
    var radio1Element = document.getElementById("radio1");
    var radio2Element = document.getElementById("radio2");

    if (selectElement.value === "") {
        radio1Element.style.display = "none";
        radio2Element.style.display = "none";
    } else {
        radio1Element.style.display = "inline";
        radio2Element.style.display = "inline";
    }
}

function afficherSearch() {
    var selectElement = document.getElementById("search");
    var radio1Element = document.getElementById("globalQuery");

    if (selectElement.value === "") {
        radio1Element.style.display = "none";
    } else {
        radio1Element.style.display = "inline";
    }
}

function afficherReser() {
    var reser = document.getElementById("reset");
    reser.classList.toggle("invisible");
}