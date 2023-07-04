// Récupération des éléments nécessaires à la fonction
let d1 = document.getElementById("infoIcon");
let d2 = document.getElementById("info");

// Affiche l'élément d2 lors du survol de d1
d1.addEventListener("mouseover", () => { d2.style.display = "block"; });
// Masque l'élément d2 lors du survol de d1
d1.addEventListener("mouseout", () => { d2.style.display = "none"; });