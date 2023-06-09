function ajouter() {
  event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
  var divElement = document.getElementById("add");
  divElement.classList.toggle("invisible");
}