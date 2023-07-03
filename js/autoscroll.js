var autoScrollInterval; // Variable pour stocker l'intervalle de l'autoscroll

// Fonction pour effectuer l'autoscroll
function autoScroll() {
    // Récupération des éléments nécessaires à la fonction
    var radioButtons = document.getElementsByName("position");
    var maxIndex = radioButtons.length;
    var currentIndex = 1;

    // Utiliser setInterval pour exécuter une fonction à intervalles réguliers (toutes les 4000 millisecondes)
    autoScrollInterval = setInterval(function () {

        // Désélectionner le bouton radio actuel
        radioButtons[currentIndex].checked = false;
        
        // Mettre à jour l'index du bouton radio actuel en utilisant l'opérateur de modulo (%)
        currentIndex = (currentIndex + 1) % maxIndex;
        
        // Sélectionner le bouton radio suivant
        radioButtons[currentIndex].checked = true;
    }, 4000);
}

// Fonction pour arrêter l'autoscroll
function stopAutoScroll() {
    // Utiliser clearInterval pour arrêter l'exécution de la fonction définie avec setInterval
    clearInterval(autoScrollInterval);
}

// Appeler la fonction autoScroll pour démarrer l'autoscroll
autoScroll();

// Obtenir tous les boutons radio avec le nom "position"
var radioButtons = document.getElementsByName("position");

// Ajouter un écouteur d'événement "click" à chaque bouton radio pour arrêter l'autoscroll
for (var i = 0; i < radioButtons.length; i++) {
radioButtons[i].addEventListener("click", stopAutoScroll);
}