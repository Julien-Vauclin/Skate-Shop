function toggleMenu() {
  var menu = document.getElementById('navbar-menu');
  if (menu.style.display === 'block') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'block';
  }
}
// Défilement carousel
function autoScroll() {
  $('#carouselExampleCaptions').carousel('next');
}
setInterval(autoScroll, 7000);
