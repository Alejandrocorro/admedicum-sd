import AOS from 'aos';
import 'aos/dist/aos.css';
import feather from 'feather-icons';
import {jarallax, jarallaxVideo} from 'jarallax';
//import {locomo} from './locomotive-gsap';
import { cursorHover, scrollTo, clearVarTimeout } from '../helpers'; // funciones para agilizar el desarrollos
import {slider} from '../util/slider';
import {mailer} from '../util/mail';
import {add_to_cart} from '../util/domUtils'

export default {
  init() {
    AOS.init()
    jarallaxVideo()


    /** Bulma 
     * @docs https://bulmajs.tomerbe.co.uk/docs/0.11/1-getting-started/1-introduction/
     */
    
    /**Parallax */

    jarallax(document.querySelectorAll('.is-parallax-contain'), {
      speed: 0.9,
      imgSize: 'cover',
      imgPosition: '25% 50%',
    })

    jarallax(document.querySelectorAll('.is-parallax-cover'), {
      speed: 0.4,
      imgSize: 'cover',
      imgPosition: '25% 50%',
    })

    document.querySelectorAll('.is-parallax-video').forEach(element => {
      jarallax(element, {
        speed: 0.4,
        videoSrc: `mp4:${element.dataset.url}`
      });
    });

    /**Slider */
    
    slider.type1({
      element : '.slider',
      props : {
        type       : 'loop',
        perPage    : 3,
        perMove    : 3,
        pagination : false,
        speed      : 500,
        breakpoints: {
          600: {
            perPage: 1,
          },
        },
      }
    }, true)

    slider.type1({
      element : '.slider-img',
      props : {
        type       : 'loop',
        perPage    : 4,
        perMove    : 4,
        pagination : false,
        speed      : 500,
        breakpoints: {
          992: {
            perPage: 2,
          },
        },
        breakpoints: {
          600: {
            perPage: 2,
          },
        },
      }
    }, true)
    
    slider.type1({
      element : '.slider-blog',
      props : {
        type       : 'loop',
        perPage    : 2,
        perMove    : 2,
        pagination : false,
        speed      : 500,
        breakpoints: {
          600: {
            perPage: 1,
          },
        },
      }
    }, true)

    slider.type1({
      element : '.slider-is2',
      props : {
        type       : 'loop',
        perPage    : 2,
        perMove    : 1,
        pagination : false,
        speed      : 500,
        breakpoints: {
          600: {
            perPage: 1,
          },
        },
      }
    }, true)
    
    //direction: 'rtl',
    slider.type1({
      element : '.slider-is4',
      props : {
        type       : 'loop',
        perPage    : 4,
        perMove    : 4,
        pagination : false,
        speed      : 500,
        breakpoints: {
          1466: {
            perPage: 3,
          },
        },
        breakpoints: {
          992: {
            perPage: 2,
          },
        },
        breakpoints: {
          500: {
            perPage: 1,
          },
        },
      }
    }, true)

    slider.type1({
      element : '.slider-is5',
      props : {
        type       : 'loop',
        perPage    : 5,
        perMove    : 5,
        pagination : false,
        speed      : 500,
        breakpoints: {
          600: {
            perPage: 1,
          },
        },
      }
    }, true)

    let data = {
      formElement: '.contact-form',
      action : 'send_mailsinador',
      to : ['emyerbetharenas@gmail.com', 'emyerbetharenas@gmail.com'],
      subject : 'Este es el asunto del vta',
      error : 'No se pudo enviar el correo',
      success : 'Se envio el correo super bien',
      spanBlock : true,
      files : [
        {
          type : 'jpg',
          size : 2
        },
        {
          type : 'png',
          size : 2
        },
        {
          type : 'pdf',
          size : 2
        }
      ]
    }

    mailer(data, (response)=>{
      console.log(response)
    })

    add_to_cart('.add-cartinador', (response)=>{
      console.log(response)
    })

    //Modal de hero
let modalOne = document.querySelector('.modal-1-footer')
let modalTwo = document.querySelector('.modal-2-footer')
let btnModal = document.querySelector('.cerrar-modal')

modalOne.addEventListener('click', (e) => {
  e.preventDefault()
  modalTwo.classList.add('modal-active');
});
btnModal.addEventListener('click', (e) => {
  e.preventDefault()
  modalTwo.classList.remove('modal-active');
});

//menu
let botonMenu =  document.querySelector('.navbar-burger')
botonMenu.addEventListener('click', (e) => {
  e.preventDefault()
  botonMenu.classList.toggle('is-active')
  let botonNav =  document.querySelector('.navbar')
  botonNav.classList.toggle('is-active')
  
});
let idiomaMobile =  document.querySelector('.navbar-mobile-is')
if(idiomaMobile){
  $(".navbar-mobile-is a:contains('English')").each(function() { 
    $(this).text('EN')
  });
  $(".navbar-mobile-is a:contains('Deutch')").each(function() { 
    $(this).text('DE')
  });
  $(".navbar-mobile-is a:contains('French')").each(function() { 
    $(this).text('FR')
  });
}



//Open content
let seccionOne = document.querySelector('.seccion-1')
let classEf = document.querySelector('.ml-card-1')
let classEt = document.querySelector('.ml-card-2')
let classEff = document.querySelector('.ml-card-3')
let classEtt = document.querySelector('.ml-card-4')
//
if(seccionOne){
  let btnOpenone = document.querySelector('.open-1')
  let btnCloserone = document.querySelector('.closer-1')
    btnOpenone.addEventListener('click', (e) => {
      e.preventDefault()
      classEf.classList.add('card-active');
    });
    btnCloserone.addEventListener('click', (e) => {
      e.preventDefault()
      classEf.classList.remove('card-active');
    });
  //
  let btnOpentwo = document.querySelector('.open-2')
  let btnClosertwo = document.querySelector('.closer-2')
    btnOpentwo.addEventListener('click', (e) => {
      e.preventDefault()
      classEt.classList.add('card-active');
    });
    btnClosertwo.addEventListener('click', (e) => {
      e.preventDefault()
      classEt.classList.remove('card-active');
    });
  //
  let btnOthree = document.querySelector('.open-3')
  let btnCthree = document.querySelector('.closer-3')
    btnOthree.addEventListener('click', (e) => {
      e.preventDefault()
        classEff.classList.add('card-active');
    });
    btnCthree.addEventListener('click', (e) => {
      e.preventDefault()
      classEff.classList.remove('card-active');
    });
  //
  let btnOfive = document.querySelector('.open-4')
  let btnCfive = document.querySelector('.closer-4')
    btnOfive.addEventListener('click', (e) => {
      e.preventDefault()
        classEtt.classList.add('card-active');
    });
    btnCfive.addEventListener('click', (e) => {
      e.preventDefault()
      classEtt.classList.remove('card-active');
    });
    

  let secciontwo = document.querySelector('.seccion-2')
  let fivePatients = document.querySelector('.ml-card-5')
  let sixPatients = document.querySelector('.ml-card-6')
  let sevenPatients = document.querySelector('.ml-card-7')
  let eightPatients = document.querySelector('.ml-card-8')
  if(secciontwo){
    //Five
  let btnPatientsOpenFive = document.querySelector('.open-5')
  let btnPatientsCloserFive = document.querySelector('.closer-5')
    btnPatientsOpenFive.addEventListener('click', (e) => {
      e.preventDefault()
      fivePatients.classList.add('card-active');
    });
    btnPatientsCloserFive.addEventListener('click', (e) => {
      e.preventDefault()
      fivePatients.classList.remove('card-active');
    });
  //Six
  let btnPatientsOpenSix = document.querySelector('.open-6')
  let btnPatientsCloserSix = document.querySelector('.closer-6')
    btnPatientsOpenSix.addEventListener('click', (e) => {
      e.preventDefault()
      sixPatients.classList.add('card-active');
    });
    btnPatientsCloserSix.addEventListener('click', (e) => {
      e.preventDefault()
      sixPatients.classList.remove('card-active');
    });
  //Seven
  let btnPatientsOpenSeven = document.querySelector('.open-7')
  let btnPatientsCloserSeven = document.querySelector('.closer-7')
    btnPatientsOpenSeven.addEventListener('click', (e) => {
      e.preventDefault()
      sevenPatients.classList.add('card-active');
    });
    btnPatientsCloserSeven.addEventListener('click', (e) => {
      e.preventDefault()
      sevenPatients.classList.remove('card-active');
    });
  //Eight
  let btnPatientsOpenEight = document.querySelector('.open-8')
  let btnPatientsCloserEight = document.querySelector('.closer-8')
    btnPatientsOpenEight.addEventListener('click', (e) => {
      e.preventDefault()
      eightPatients.classList.add('card-active');
    });
    btnPatientsCloserEight.addEventListener('click', (e) => {
      e.preventDefault()
      eightPatients.classList.remove('card-active');
    });
  }
}










//Botones idioma
let botonIdiomaopenen = document.querySelector('.open-en-nav')
let idiomaParaAbrir = document.querySelector('.idioma-nav')

let botonIdiomaopenm = document.querySelector('.open-en-nav-mobile')
let idiomaParaAbrirm = document.querySelector('.idioma-nav-mobile')


if(idiomaParaAbrir){
  botonIdiomaopenen.addEventListener('click', (e) => {
    e.preventDefault()
    idiomaParaAbrir.classList.toggle('idioma-active');
  });
}

if(idiomaParaAbrirm){
  botonIdiomaopenm.addEventListener('click', (e) => {
    e.preventDefault()
    idiomaParaAbrirm.classList.toggle('idioma-active');
  });
}

//Validacion de boton, "si tiene un video funciona" - prueba
//let video = document.querySelector('#video .caja-video .ivideo')
//if(video){
//    let idVideo = document.querySelector('#idVideo')
//    idVideo.style.opacity = 1;
//}

//Menu
function aqui(){
  let menuItemListSvg = document.querySelector("#menu-item-27 a");
  menuItemListSvg.classList.add('svg-list');
}
aqui()

//boton de lorem
let btnLorem1 = document.querySelector('#lorembtn1')
let btnLorem2 = document.querySelector('#lorembtn2')
let btnLorem3 = document.querySelector('#lorembtn3')

let actLorem = document.querySelector('.active-lorem')


if(btnLorem1){
  btnLorem1.addEventListener('click', (e) => {
    e.preventDefault()
    btnLorem1.parentNode.classList.toggle('active-lorem')
    if(actLorem){
      btnLorem2.parentNode.classList.remove('active-lorem')
      btnLorem3.parentNode.classList.remove('active-lorem')
    }
  });
}
if(btnLorem2){
  btnLorem2.addEventListener('click', (e) => {
    e.preventDefault()
    btnLorem2.parentNode.classList.toggle('active-lorem')
    if(actLorem){
      btnLorem1.parentNode.classList.remove('active-lorem')
      btnLorem3.parentNode.classList.remove('active-lorem')
    }
    
  });
}
if(btnLorem3){
  btnLorem3.addEventListener('click', (e) => {
    e.preventDefault()
    btnLorem3.parentNode.classList.toggle('active-lorem')
    if(actLorem){
      btnLorem1.parentNode.classList.remove('active-lorem')
      btnLorem2.parentNode.classList.remove('active-lorem')
    }
  });
}

//para los empleados del slider
let pageEngage = document.querySelector('#team')
if(pageEngage){
  $("h2:contains('Christian Hoenig')").each(function() { 
    $(this).parent().parent().parent().addClass("is-dark-team");
  });
  $("h2:contains('Ulrike Nowak')").each(function() { 
    $(this).parent().parent().parent().addClass("is-dark-team");
  });
  $("h2:contains('Robert Pleticha')").each(function() { 
    $(this).parent().parent().parent().addClass("is-dark-team");
  });
  $("h2:contains('Razak Ellafi')").each(function() { 
    $(this).parent().parent().parent().addClass("is-dark-team");
  });
  $("h2:contains('Empleados')").each(function() { 
    $(this).parent().parent().parent().parent().parent().addClass("is-hidden");
  });
}

// boton show more
let btnShowMore = document.querySelector('#showmore')
if(btnShowMore){
  btnShowMore.addEventListener('click', (e) => {
    e.preventDefault()
    btnShowMore.parentNode.parentNode.classList.toggle('active-empleados')
  });
}
// boton read more
let btnReadMoreBlog = document.querySelector('#readmoreblog')
if(btnReadMoreBlog){
  btnReadMoreBlog.addEventListener('click', (e) => {
    e.preventDefault()
    let iscontenedorblog = document.querySelector('.is-contenedor-blog')
    iscontenedorblog.classList.add('active-blog')
    btnReadMoreBlog.classList.add('active-blog')
  });
}


//single CASE STUDIES
let classCaseStudies = document.querySelector('.case-studies-template-default')
if(classCaseStudies){
  $("h3:contains('Situation')").each(function() { 
    $(this).addClass("is-situation");
  });
  $("h3:contains('Our Solution')").each(function() { 
    $(this).addClass("is-our-solution");
  });
  $("h3:contains('Results')").each(function() { 
    $(this).addClass("is-results");
  });
}





//open boton readmore 
let oculc = document.querySelector('#ocultar-c')
if(oculc){
  oculc.addEventListener('click', (e) => {
    e.preventDefault()
    let cajac = document.querySelector('.caja-ocultar-c')
    cajac.classList.add('active-clinical')
    oculc.classList.add('active-clinical')
  });
}

//Open testimonials
$(".open-testimonials-1").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().addClass('testimonials-active');
  $(this).parent().parent().parent().parent().addClass('is-active');
});
$(".closer-testimonials-1").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().removeClass('testimonials-active');
  $(this).parent().parent().parent().parent().removeClass('is-active');
});

$(".open-testimonials-2").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().addClass('testimonials-active');
  $(this).parent().parent().parent().parent().addClass('is-active');
});
$(".closer-testimonials-2").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().removeClass('testimonials-active');
  $(this).parent().parent().parent().parent().removeClass('is-active');
});

$(".open-testimonials-3").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().addClass('testimonials-active');
  $(this).parent().parent().parent().parent().addClass('is-active');
});
$(".closer-testimonials-3").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().removeClass('testimonials-active');
  $(this).parent().parent().parent().parent().removeClass('is-active');
});

$(".open-testimonials-4").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().addClass('testimonials-active');
  $(this).parent().parent().parent().parent().addClass('is-active');
});
$(".closer-testimonials-4").click(function(){
  event.preventDefault();
  $(this).parent().parent().parent().removeClass('testimonials-active');
  $(this).parent().parent().parent().parent().removeClass('is-active');
});



//Open clinical
let clinical = document.querySelector('#clinical-trials')
if(clinical){
  $(".open-testimonials-1").click(function(){
    event.preventDefault();
    $(this).parent().parent().addClass('testimonials-active');
  });
  $(".closer-testimonials-1").click(function(){
    event.preventDefault();
    $(this).parent().parent().removeClass('testimonials-active');
  });
  
  $(".open-testimonials-2").click(function(){
    event.preventDefault();
    $(this).parent().parent().addClass('testimonials-active');
  });
  $(".closer-testimonials-2").click(function(){
    event.preventDefault();
    $(this).parent().parent().removeClass('testimonials-active');
  });
  
  $(".open-testimonials-3").click(function(){
    event.preventDefault();
    $(this).parent().parent().addClass('testimonials-active');
  });
  $(".closer-testimonials-3").click(function(){
    event.preventDefault();
    $(this).parent().parent().removeClass('testimonials-active');
  });
  
  $(".open-testimonials-4").click(function(){
    event.preventDefault();
    $(this).parent().parent().addClass('testimonials-active');
  });
  $(".closer-testimonials-4").click(function(){
    event.preventDefault();
    $(this).parent().parent().removeClass('testimonials-active');
  });
}

//mostrar contact us
let contenedotContact = document.querySelector('.cont-contact-function')
let btnContact = document.querySelector('.btn-contact-function')
if(contenedotContact){
  btnContact.addEventListener('click', (e) => {
    e.preventDefault()
    contenedotContact.classList.add('is-block');
  });
}




//
//scrollTo
//
let goDown = document.querySelectorAll('.go-down, .two-down');

if (goDown.length > 0) {
  goDown.forEach(el=>{
    el.addEventListener('click', function(e) {
      e.preventDefault();
      scrollTo(document.querySelector(this.dataset.target).offsetTop, 700)
    })
  })
}







  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    window.scrollTo(0, 0)
    //locomo()

    
  },
};

