function update(id) {
  event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
  var divElement = document.getElementById(id);
  divElement.classList.toggle("invisible");
}