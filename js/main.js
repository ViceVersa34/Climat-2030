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
    element3.style.display='block';
    element3.style.width=cache+'px';
}

function changerLeft2 (gauche){
    var element1= document.getElementById('nav');
    var element2 = document.getElementById('body');
    var element3 = document.getElementById('blur');
    element1.style.left=gauche;
    element2.style.overflowY='auto';
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
