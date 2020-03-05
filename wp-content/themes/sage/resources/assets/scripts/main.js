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

  jQuery("#gallery").unitegallery({
    gallery_theme: "tiles",
    tiles_type: "justified",
    tiles_justified_row_height: 440,
    lightbox_slider_control_zoom: true,						
  });
  jQuery("#gallery1").unitegallery({
    gallery_theme: "tiles",
    tiles_type: "justified",
    tiles_justified_row_height: 440						
  });
  jQuery("#gallery2").unitegallery({
    gallery_theme: "tiles",
    tiles_type: "justified",
    tiles_justified_row_height: 440							
  });
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