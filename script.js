// Script JS facultatif pour ajouter un effet de parallaxe sur l'image d'accueil
window.addEventListener('scroll', function() {
    let offset = window.pageYOffset;
    document.querySelector('.accueil::after').style.backgroundPositionY = -offset * 0.5 + 'px';
});