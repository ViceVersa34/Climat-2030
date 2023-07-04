function ajouter() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Récupération des éléments nécessaires à la fonction
    var divElement = document.getElementById("add");
    // Ajoute ou enlève la class 'invisible' à l'élément
    divElement.classList.toggle("invisible");
}