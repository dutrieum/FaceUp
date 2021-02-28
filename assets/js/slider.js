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
jQuery(window).load(function() {
  setTimeout(function(){
    jQuery(".loader").fadeOut("200") },
    3500
  );
});
var animation = bodymovin.loadAnimation({
  container: document.getElementById('svgContainer'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '/~dutrieum/faceup/wp-content/themes/FaceUp/assets/js/logo_anime.json'
});
