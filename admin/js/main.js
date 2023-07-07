// Fonction pour le ScrollUp
jQuery(function () {
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) {
                // Décale l'élément si la page est descendu de plus de 200px
                $('.scrollUp').css('right', '15px');
            } else {
                $('.scrollUp').removeAttr('style');
            }
        });
    });
});