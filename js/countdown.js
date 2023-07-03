// -------------------------------------- <COMPTE A REBOURS> --------------------------------------

function countdown() {
    const deadline = new Date("2030-01-01T00:00:00");
    const now = new Date();

    const timeLeft = deadline.getTime() - now.getTime();

    const seconds = Math.floor((timeLeft / 1000) % 60);
    const minutes = Math.floor((timeLeft / 1000 / 60) % 60);
    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));

    const remainingYears = Math.floor(days / 365);
    const remainingMonths = Math.floor((days % 365) / 30);
    const remainingDays = (days % 365) % 30;

    document.getElementById("years").textContent = remainingYears.toString().padStart(2, "0");
    document.getElementById("months").textContent = remainingMonths.toString().padStart(2, "0");
    document.getElementById("days").textContent = remainingDays.toString().padStart(2, "0");
    document.getElementById("hours").textContent = hours.toString().padStart(2, "0");
    document.getElementById("minutes").textContent = minutes.toString().padStart(2, "0");
    document.getElementById("seconds").textContent = seconds.toString().padStart(2, "0");
}

setInterval(countdown, 1000);
countdown();

function countdownPopUp(tempsAgrandissement, tempsRetour) {
    const element = document.getElementById('countdownPopUp');

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

    const largeurEcran = window.innerWidth;
    const hauteurEcran = window.innerHeight;
    const widthOriginale = getComputedStyle(element).width;
    const heightOriginale = getComputedStyle(element).height;

    const fontSize1Originale = '0.9rem';
    const fontSize2Originale = '1.25rem';

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
        // Réduire la div à sa taille d'origine
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

            // Réaliser d'autres actions après le retour à la taille d'origine
            // ...
        }, tempsRetour);
    }, tempsAgrandissement);
}