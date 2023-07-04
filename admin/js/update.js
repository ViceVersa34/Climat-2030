function update(id) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    // Récupération des éléments nécessaires à la fonction
    var divElement = document.getElementById(id);
    // Ajoute / supprime la class 'invisible'
    divElement.classList.toggle("invisible");
}