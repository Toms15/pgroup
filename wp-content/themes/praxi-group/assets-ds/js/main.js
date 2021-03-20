jQuery(document).foundation();
jQuery(document).ready(function(){

  // ----------------------------------------
  // Init AOS
  // ----------------------------------------
  AOS.init();

	// ----------------------------------------
  // Cookie Bar
  // ----------------------------------------
  jQuery.cookieBar({
   message: "<strong><i class='fad fa-hands-wash'></i>Cookie</strong>Cliccando su OK, l’utente accetta l’utilizzo dei cookie di terze parti. Per maggiori informazioni, anche in ordine alla disattivazione, è possibile consultare l'<a class='cookie-link-2' href='https://www.praxigroup.it/cookie' target='_blank'>informativa sui cookie</a> completa.",
   acceptText: 'Ok',
   fixed: true,
   bottom: true
  });

  // ----------------------------------------
  // Typewriter 
  // ----------------------------------------
  if($('#keywords-lavoro').length) {
    var app = document.getElementById('keywords-lavoro');
    var typewriter = new Typewriter(app, {
      loop: true,
      cursor: '',
    });
    typewriter
    .typeString('healthy workers<br>healthy company')
    .pauseFor(2500)
    .deleteAll()
    .typeString('medicina per le<br>aziende')
    .pauseFor(2500)
    .deleteAll()
    .typeString('è un gruppo di<br>professionisti')
    .pauseFor(2500)
    .deleteAll()
    .typeString('per la salute<br>e la sicurezza<br>della tua azienda')
    .pauseFor(2500)
    .deleteAll()
    .typeString('organizza<br>corsi di formazione')
    .pauseFor(2500)
    .deleteAll()
    .typeString('offre consulenza<br>in tema Dlgs 81/08 e s.m.i.')
    .pauseFor(2500)
    .deleteAll()
    .start();
  }
  if($('#keywords-ds').length) {
    var app = document.getElementById('keywords-ds');
    var typewriter = new Typewriter(app, {
      loop: true,
      cursor: '',
    });
    typewriter
    .typeString('vent\'anni di esperienza<br>a tutela della salute')
    .pauseFor(2500)
    .deleteAll()
    .typeString('si avvale di personale<br>altamente qualificato')
    .pauseFor(2500)
    .deleteAll()
    .typeString('offre un servizio<br>rapido, sicuro ed accessibile')
    .pauseFor(2500)
    .deleteAll()
    .start();
  }

  // ----------------------------------------
  // Init Select2
  // ----------------------------------------
  if($('.wpcf7-select').length) {
    $('.wpcf7-select').select2({
      minimumResultsForSearch: Infinity,
      placeholder: "Seleziona...",
      allowClear: true
    });
  }

  // ----------------------------------------
  // Lazy Load
  // ----------------------------------------
  var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy",
    load_delay: 100 //adjust according to use case
  }); 

  // ----------------------------------------
  // Scroll event
  // ----------------------------------------
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $('#masthead').addClass('scrolled');
      $('#masthead').removeClass('no--top-bar');
    } else {
      if($('.top--bar').hasClass('is--hide')) {
        $('#masthead').removeClass('scrolled');
        $('#masthead').addClass('no--top-bar');
      } else {
        $('#masthead').removeClass('scrolled');
      }
    }
  });

  // ----------------------------------------
  // Go to section
  // ----------------------------------------
  $('.menu li a').on('click', function(){
    var id = $(this).attr('href');
    var item = $(this).parent();
    item.addClass('active')
    item.siblings().removeClass('active')
    $('html, body').animate({
      scrollTop: $(id).offset().top
    }, 1200)
  });
  $('.mobile-navigation .menu li a').on('click', function(){
    $('.mobile-navigation').removeClass('is--open')
    $('.hamburger--menu').removeClass('shrinked')
  });

  // ----------------------------------------
  // Tabs
  // ----------------------------------------
  $('.tabs .tabs-title').not().addClass('has--opacity');
  $('.tabs .tabs-title:first-of-type').removeClass('has--opacity').addClass('is-active');
  $('.tabs-content .tabs-panel:first-of-type').addClass('is-active');
  $('.tabs .tabs-title').on('click', function(){
    $('.tabs .tabs-title').removeClass('has--opacity');
    $(this).siblings().addClass('has--opacity');
  });

  // ----------------------------------------
  // Modal
  // ----------------------------------------
  $('.single--service').on('click', function(){
    var idModal = $(this).data('modal');
    var modal = $(document).find("[id='" + idModal + "']");
    $('.modal--view').removeClass('is--visible');
    modal.addClass('is--visible');
  });
  $('.modal--service i.fa-times').on('click', function() {
    $('.modal--view').removeClass('is--visible');
  })
  $('.single--card').on('click', function(){
    var idModal = $(this).data('modal');
    var modal = $(document).find("[id='" + idModal + "']");
    $('.modal--view').removeClass('is--visible');
    modal.addClass('is--visible');
  });
  $('.modal--service i.fa-times').on('click', function() {
    $('.modal--view').removeClass('is--visible');
  })

  // ----------------------------------------
  // Navigation Menu
  // ----------------------------------------
  jQuery('.hamburger--menu').on('click', function() {
    jQuery('.mobile-navigation').toggleClass('is--open');
    jQuery('.hamburger--menu').toggleClass('shrinked');
  });

  // ----------------------------------------
  // Remove Top Bar
  // ----------------------------------------
  jQuery('.top--bar i').on('click', function() {
    jQuery('.top--bar').addClass('is--hide');
    jQuery('#masthead').addClass('no--top-bar');
  });

  // ----------------------------------------
  // Init Swiper
  // ----------------------------------------
  if($('.logos-slider').length) {
    $('.logos-slider').each(function(){
      var el = $(this)
      console.log(el);
      var carouselItem = new Swiper('#' + el.attr('id'), {
        speed: 700,
        spaceBetween: 16,
        loop: true,
        // centeredSlides: true,
        // autoplay: {
        //   delay: 3000,
        // },
        breakpointsInverse: true,
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 1,
          },
          // when window width is >= 768px
          768: {
            slidesPerView: 4,
            spaceBetween: 16,
          },
          // when window width is >= 992px
          992: {
            slidesPerView: 6,
            spaceBetween: 16,
          },
          // when window width is >= 992px
          1200: {
            slidesPerView: 6,
            spaceBetween: 16,
          }
        },
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
      });
    })
  }
  if(jQuery('#reviews').length){
    var reviewsHomepage = new Swiper('#reviews', {
      speed: 700,
      spaceBetween: 16,
      loop: true,
      centeredSlides: true,
      // autoplay: {
      //   delay: 3000,
      // },
      breakpointsInverse: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 3,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        1200: {
          slidesPerView: 3,
          spaceBetween: 16,
        }
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
    });
  }
  if(jQuery('#network').length){
    var networkHomepage = new Swiper('#network', {
      speed: 700,
      spaceBetween: 16,
      loop: true,
      // centeredSlides: true,
      // autoplay: {
      //   delay: 3000,
      // },
      breakpointsInverse: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 3,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 5,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        1200: {
          slidesPerView: 5,
          spaceBetween: 32,
        }
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
    });
  }
  if(jQuery('#team-slider').length){
    var teamSliderHomepage = new Swiper('#team-slider', {
      speed: 700,
      spaceBetween: 16,
      loop: true,
      // centeredSlides: true,
      // autoplay: {
      //   delay: 3000,
      // },
      breakpointsInverse: true,
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 4,
          spaceBetween: 16,
        },
        // when window width is >= 992px
        1200: {
          slidesPerView: 4,
          spaceBetween: 20,
        }
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
    });
  }

  // ----------------------------------------
  // Google Maps
  // ----------------------------------------
  jQuery(function() {
    if(jQuery('#map-mg').length) {
      function initializeMapMG() {       
        var mapOptions = {
          center: new google.maps.LatLng(41.881050266453165, 12.508417275442664),
          zoom: 16,
          disableDefaultUI: true,
          scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById("map-mg"),
          mapOptions);

        // var icon = {
        //   url: 'images/marker.png',
        // }

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(41.881050266453165, 12.508417275442664),
          map: map,
          // icon: icon
        });
      }
    }
    if(jQuery('#map-cs').length) {
      function initializeMapCS() {       
        var mapOptions = {
          center: new google.maps.LatLng(41.888181413917884, 12.518754618489767),
          zoom: 16,
          disableDefaultUI: true,
          scrollwheel: false
        };
        var map = new google.maps.Map(document.getElementById("map-cs"),
          mapOptions);

        // var icon = {
        //   url: 'images/marker.png',
        // }

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(41.888181413917884, 12.518754618489767),
          map: map,
          // icon: icon
        });
      }
    }

    if(jQuery('#cookie-bar').length) {
      if(jQuery('#map-mg').length) {
        jQuery('.cb-enable').on('click', initializeMapMG);
      }
      if(jQuery('#map-cs').length) {
        jQuery('.cb-enable').on('click', initializeMapCS);
      }
    } else {
      if(jQuery('#map-mg').length) {
        initializeMapMG();
      }
      if(jQuery('#map-cs').length) { 
        initializeMapCS();
      }
    }

  });
	
});
