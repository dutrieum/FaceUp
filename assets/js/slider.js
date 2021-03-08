var elem = document.querySelector('.main-carousel');
var $ = jQuery;
var url = jQuery('.loader').attr('data-url');
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
  path: url + '/assets/js/logo_anime.json'
});
$('a[href^="mailto:"]').each(function() {
            let at = new RegExp('arobaseat', 'g');
            $(this).attr('href', $(this).attr('href').replace(at, '@'));
            $(this).text($(this).text().replace(at, '@'));
        });
