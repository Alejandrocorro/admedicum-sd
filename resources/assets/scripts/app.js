// import external dependencies
import 'jquery';
import { cursorHover, scrollTo, clearVarTimeout } from './helpers'; // funciones para agilizar el desarrollo

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
jQuery(document).ready(() => routes.loadEvents());

//detectar dispositivos movil 
function detectDevice() {
  if( navigator.userAgent.match(/Android/i)
  || navigator.userAgent.match(/webOS/i)
  || navigator.userAgent.match(/iPhone/i)
  || navigator.userAgent.match(/iPad/i)
  || navigator.userAgent.match(/iPod/i)
  || navigator.userAgent.match(/BlackBerry/i)
  || navigator.userAgent.match(/Windows Phone/i)){
      document.body.classList.add('is-mobile-device')
  }else {
      document.body.classList.remove('is-mobile-device')
  }
}
detectDevice()


