// -------------------------------------- <COMPTE A REBOURS> --------------------------------------

// Fonction pour mettre à jour le compte à rebours
function countdown() {
    const deadline = new Date("2030-01-01T00:00:00"); // Date limite du compte à rebours
    const now = new Date(); // Date actuelle

    const timeLeft = deadline.getTime() - now.getTime(); // Temps restant en millisecondes

    const seconds = Math.floor((timeLeft / 1000) % 60); // Calcul des secondes restantes
    const minutes = Math.floor((timeLeft / 1000 / 60) % 60); // Calcul des minutes restantes
    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24); // Calcul des heures restantes
    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24)); // Calcul des jours restants

    const remainingYears = Math.floor(days / 365); // Calcul des années restantes
    const remainingMonths = Math.floor((days % 365) / 30); // Calcul des mois restants
    const remainingDays = (days % 365) % 30; // Calcul des jours restants

    // Mise à jour des éléments HTML avec les valeurs du compte à rebours
    document.getElementById("years").textContent = remainingYears.toString().padStart(2, "0");
    document.getElementById("months").textContent = remainingMonths.toString().padStart(2, "0");
    document.getElementById("days").textContent = remainingDays.toString().padStart(2, "0");
    document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
    document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
    document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
}

setInterval(countdown, 1000); // Appel de la fonction countdown toutes les secondes pour mettre à jour le compte à rebours
countdown(); // Appel initial de la fonction countdown pour afficher immédiatement le compte à rebours

// Fonction pour animer la pop-up du compte à rebours
function countdownPopUp(tempsAgrandissement, tempsRetour) {
    const element = document.getElementById('countdownPopUp');  // Div contenant le compte à rebours

    // Récupération des éléments HTML à animer
    const unit1 = document.getElementById('unit1');
    const unit2 = document.getElementById('unit2');
    const unit3 = document.getElementById('unit3');
    const unit4 = document.getElementById('unit4');
    const unit5 = document.getElementById('unit5');
    const unit6 = document.getElementById('unit6');

    const years = document.getElementById('years');
    const months = document.getElementById('months');
    const days = document.getElementById('days');
    const hours = document.getElementById('hours');
    const minutes = document.getElementById('minutes');
    const seconds = document.getElementById('seconds');

    const largeurEcran = window.innerWidth; // Largeur de l'écran
    const hauteurEcran = window.innerHeight; // Hauteur de l'écran
    const widthOriginale = getComputedStyle(element).width; // Largeur originale de la div
    const heightOriginale = getComputedStyle(element).height; // Hauteur originale de la div

    const fontSize1Originale = '0.9rem';  // Taille de police originale pour les unités
    const fontSize2Originale = '1.25rem'; // Taille de police originale pour les chiffres

    const width = `${hauteurEcran * 45 / 100}px`; // Taille agrandie de la div
    const height = `${hauteurEcran * 40 / 100}px`; // Taille agrandie de la div
    const transitionDuration = '1.5s'; // Durée de la transition CSS
    const fontSize1 = '1.75rem';
    const fontSize2 = '3.5rem';

    // Ajouter une transition CSS
    element.style.transition = `${transitionDuration} ease`;

    unit1.style.transition = `${transitionDuration} ease`;
    unit2.style.transition = `${transitionDuration} ease`;
    unit3.style.transition = `${transitionDuration} ease`;
    unit4.style.transition = `${transitionDuration} ease`;
    unit5.style.transition = `${transitionDuration} ease`;
    unit6.style.transition = `${transitionDuration} ease`;
    
    years.style.transition = `${transitionDuration} ease`;
    months.style.transition = `${transitionDuration} ease`;
    days.style.transition = `${transitionDuration} ease`;
    hours.style.transition = `${transitionDuration} ease`;
    minutes.style.transition = `${transitionDuration} ease`;
    seconds.style.transition = `${transitionDuration} ease`;

    // Agrandissement de la div
    years.classList.toggle("size-txt2");
    months.classList.toggle("size-txt2");
    days.classList.toggle("size-txt2");
    hours.classList.toggle("size-txt2");
    minutes.classList.toggle("size-txt2");
    seconds.classList.toggle("size-txt2");
    
    element.style.width = width;
    element.style.height = height;

    unit1.style.fontSize = fontSize1;
    unit2.style.fontSize = fontSize1;
    unit3.style.fontSize = fontSize1;
    unit4.style.fontSize = fontSize1;
    unit5.style.fontSize = fontSize1;
    unit6.style.fontSize = fontSize1;
    
    years.style.fontSize = fontSize2;
    months.style.fontSize = fontSize2;
    days.style.fontSize = fontSize2;
    hours.style.fontSize = fontSize2;
    minutes.style.fontSize = fontSize2;
    seconds.style.fontSize = fontSize2;
    
    // Attendre le temps d'agrandissement
    setTimeout(() => {
        // Réduire la div à sa taille d'origine et restaurer les styles initiaux
        element.style.width = widthOriginale;
        element.style.height = heightOriginale;

        unit1.style.fontSize = fontSize1Originale;
        unit2.style.fontSize = fontSize1Originale;
        unit3.style.fontSize = fontSize1Originale;
        unit4.style.fontSize = fontSize1Originale;
        unit5.style.fontSize = fontSize1Originale;
        unit6.style.fontSize = fontSize1Originale;
        
        years.style.fontSize = fontSize2Originale;
        months.style.fontSize = fontSize2Originale;
        days.style.fontSize = fontSize2Originale;
        hours.style.fontSize = fontSize2Originale;
        minutes.style.fontSize = fontSize2Originale;
        seconds.style.fontSize = fontSize2Originale;

        years.classList.toggle("size-txt2");
        months.classList.toggle("size-txt2");
        days.classList.toggle("size-txt2");
        hours.classList.toggle("size-txt2");
        minutes.classList.toggle("size-txt2");
        seconds.classList.toggle("size-txt2");

        // Attendre le temps de retour
        setTimeout(() => {
            // Réinitialiser la transition CSS
            element.style.transition = '';
        }, tempsRetour);
    }, tempsAgrandissement);
}