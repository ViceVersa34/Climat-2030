jQuery(function(){
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200 ) { 
                $('.scrollUp').css('right','15px');
            } else { 
                $('.scrollUp').removeAttr( 'style' );
            }
        
        }); 
    });
});

function changerLeft (gauche){
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');

    var largeur = window.innerWidth;
    var elem = document.getElementById('nav');
    var rect = elem.getBoundingClientRect();
    var cache = largeur-rect['width'];
    
    element1.style.left=gauche;
    element2.style.overflowY='hidden';
    element2.style.overflowX='hidden';
    element3.style.display='block';
    element3.style.width=cache+'px';
}

function changerLeft2 (gauche){
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');
    element1.style.left=gauche;
    element2.style.overflowY='auto';
    element2.style.overflowX='auto';
    element3.style.display='none';
}

function tailleCache (){
    var largeur = window.innerWidth;
    var elem = document.getElementById('nav');
    var rect = elem.getBoundingClientRect();
    var cache = largeur-rect['width'];
    alert(rect['width']);
    alert(largeur);
    alert(cache);
}

function afficherChamps() {
    var choix = document.getElementById("choix");
    var champsQuestion = document.getElementById("champsQuestion");
    var champsDevis = document.getElementById("champsDevis");

    if (choix.value === "question") {
        champsQuestion.style.display = "block";
        champsDevis.style.display = "none";
    } else if (choix.value === "devis") {
        champsQuestion.style.display = "none";
        champsDevis.style.display = "block";
    } else {
        champsQuestion.style.display = "none";
        champsDevis.style.display = "none";
    }
}

function compterCaracteres() {
    var message = document.getElementById("message");
    var compteur = document.getElementById("compteur");
    var nombreCaracteres = message.value.length;
    compteur.textContent = nombreCaracteres + "/500 caractères";
}