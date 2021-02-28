var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  contain: true,
  autoPlay: true,
  wrapAround: true,
  cellSelector: '.carousel-cell',
  prevNextButtons: false
});
jQuery(window).load(function(){ jQuery(".loader").fadeOut("200"); });
var animation = bodymovin.loadAnimation({
  container: document.getElementById('svgContainer'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/Faceup/wp-content/themes/faceup/assets/js/logo_anime.json'
});
