// Récupérer tous les éléments en position absolute
const absoluteElements = document.querySelectorAll('.repereId');

// Parcourir les éléments et appliquer le décalage
absoluteElements.forEach(element => {
    const rect = element.getBoundingClientRect();
    const currentTop = rect.top;
    // Remonte l'élément de X px
    element.style.top = (currentTop - 300) + 'px';
});