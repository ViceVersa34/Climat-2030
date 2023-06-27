function updatePrices() {
    event.preventDefault(); // Annule le comportement par défaut du lien ou du formulaire
    var divElement1 = document.getElementById('prices-tab');
    var divElement2 = document.getElementById("update-tab");
    divElement1.classList.toggle("invisible");
    divElement2.classList.toggle("invisible");
}