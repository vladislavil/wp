// import external dependencies
import $ from 'jquery';
import Swiper from 'swiper';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(
  
  () => { 
    routes.loadEvents();
    getDate();
    // toString().padStart(2,0) // преобразовать целое число в формат хх
    let $elem = jQuery(".swiper-slide");
    let $prev = $('.swiper-button-prev');
    let $next = $('.swiper-button-next');
    let $slide_now = $('.slide-now');
    let $slide_all = $('.slide-all');
    let $count_prev = 1;
    let $count_next = $elem.length;

    $slide_now.text($count_prev.toString().padStart(2,0));
    $slide_all.text($count_next.toString().padStart(2,0));

    $prev.click(function() {
      console.log("-1");
      $count_prev -= 1;
      $slide_now.text($count_prev.toString().padStart(2,0));
    });

    $next.click(function() {
      console.log("+1")
      $count_prev += 1;
      $slide_now.text($count_prev.toString().padStart(2,0));
    });

    console.log($count_next);
    console.log($count_prev);

    for( let i = 0; i < $elem.length; i++) {
      $($elem[i]).children().unitegallery({
        gallery_theme: "tiles",
        tiles_type: "justified",
        tiles_justified_row_height: 440							
      });
    }
})

const getDate = () => {
  let $date = $('.footer__date');

  $date.text(new Date().getFullYear());
}

var mySwiper = new Swiper('.swiper-container', {
  speed: 400,
  spaceBetween: 100,
  simulateTouch: false,
  navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev'
  },
});