
document.addEventListener('DOMContentLoaded', () => {
    anime.timeline({
        easing: 'easeInSine',
    })
    .add({
        targets: '.title-left',
        width: ['0px', '350px'],
    })
})



var derniere_position_de_scroll_connue = 0;
var ticking = false;

function action(position_scroll) {
    anime.timeline({
        easing: 'easeInOutExpo',
    })
    .add({
        targets: '.right-bloc img',
        width: ['0px', '478px'],
        height: ['637px'],
    })
}

window.addEventListener('onscroll', function(e) {
    derniere_position_de_scroll_connue = window.scrollY;
    if (!ticking) {
      window.requestAnimationFrame(function() {
        action(derniere_position_de_scroll_connue);
        ticking = false;
      });
    }
    ticking = true;
})