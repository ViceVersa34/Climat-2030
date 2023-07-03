// -------------------------------------- <SROLL UP> --------------------------------------

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

// -------------------------------------- </SROLL UP> --------------------------------------

// -------------------------------------- <NAV-BAR RESPONSIVE> --------------------------------------

function changerLeft (gauche){
    // Récupération des éléments nécessaires à la fonction
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');

    // Récupérer la largeur de la fenêtre du navigateur
    var largeur = window.innerWidth;

    // Récupérer les dimensions de la navBar
    var elem = document.getElementById('nav');
    var rect = elem.getBoundingClientRect();

    // Calculer la largeur restante disponible après le déplacement de la navBar vers la gauche
    var cache = largeur-rect['width'];
    
    // Modifier la propriété 'left' de la navBar pour la déplacer vers la gauche selon la valeur passée en argument
    element1.style.left=gauche;


    // Appliquer des styles pour masquer le défilement vertical et horizontal du body
    element2.style.overflowY='hidden';
    element2.style.overflowX='hidden';

    // Afficher l'élément 'blur' et lui attribuer une largeur égale à la largeur restante calculée précédemment
    element3.style.display='block';
    element3.style.width=cache+'px';
}

function changerLeft2 (gauche){
    // Récupération des éléments nécessaires à la fonction
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');

    // Rétablir la position de la navBar en utilisant la valeur passée en argument
    element1.style.left=gauche;
    
    // Rétablir le comportement de défilement vertical et horizontal du body à l'état initial
    element2.style.overflowY='auto';
    element2.style.overflowX='auto';
    
    // Masquer l'élément 'blur'
    element3.style.display='none';
}

// -------------------------------------- </NAV-BAR RESPONSIVE> --------------------------------------