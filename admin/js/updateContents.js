function updateContents(id, mid) {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    var Element1 = document.getElementById(id);
    var Element2 = document.getElementById(mid);
    Element1.classList.toggle("invisible");
    Element2.classList.toggle("invisible");
  }