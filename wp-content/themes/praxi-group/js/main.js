jQuery(document).foundation(),jQuery(document).ready((function(){if(AOS.init(),jQuery.cookieBar({message:"<strong><i class='fad fa-hands-wash'></i>Cookie</strong>Cliccando su OK, l’utente accetta l’utilizzo dei cookie di terze parti. Per maggiori informazioni, anche in ordine alla disattivazione, è possibile consultare l'<a class='cookie-link-2' href='https://www.praxigroup.it/cookie' target='_blank'>informativa sui cookie</a> completa.",acceptText:"Ok",fixed:!0,bottom:!0}),$("#keywords-lavoro").length){var e=document.getElementById("keywords-lavoro");new Typewriter(e,{loop:!0,cursor:""}).typeString("healthy workers<br>healthy company").pauseFor(2500).deleteAll().typeString("medicina per le<br>aziende").pauseFor(2500).deleteAll().typeString("è un gruppo di<br>professionisti").pauseFor(2500).deleteAll().typeString("per la salute<br>e la sicurezza<br>della tua azienda").pauseFor(2500).deleteAll().typeString("organizza<br>corsi di formazione").pauseFor(2500).deleteAll().typeString("offre consulenza<br>in tema Dlgs 81/08 e s.m.i.").pauseFor(2500).deleteAll().start()}if($("#keywords-ds").length){e=document.getElementById("keywords-ds");new Typewriter(e,{loop:!0,cursor:""}).typeString("vent'anni di esperienza<br>a tutela della salute").pauseFor(2500).deleteAll().typeString("si avvale di personale<br>altamente qualificato").pauseFor(2500).deleteAll().typeString("offre un servizio<br>rapido, sicuro ed accessibile").pauseFor(2500).deleteAll().start()}$(".wpcf7-select").length&&$(".wpcf7-select").select2({minimumResultsForSearch:1/0,placeholder:"Seleziona...",allowClear:!0});new LazyLoad({elements_selector:".lazy",load_delay:100});if($(window).scroll((function(){$(window).scrollTop()>=10?($("#masthead").addClass("scrolled"),$("#masthead").removeClass("no--top-bar")):$(".top--bar").hasClass("is--hide")?($("#masthead").removeClass("scrolled"),$("#masthead").addClass("no--top-bar")):$("#masthead").removeClass("scrolled")})),$(".menu li a").on("click",(function(){var e=$(this).attr("href"),a=$(this).parent();a.addClass("active"),a.siblings().removeClass("active"),$("html, body").animate({scrollTop:$(e).offset().top},1200)})),$(".mobile-navigation .menu li a").on("click",(function(){$(".mobile-navigation").removeClass("is--open"),$(".hamburger--menu").removeClass("shrinked")})),$(".tabs .tabs-title").not().addClass("has--opacity"),$(".tabs .tabs-title:first-of-type").removeClass("has--opacity").addClass("is-active"),$(".tabs-content .tabs-panel:first-of-type").addClass("is-active"),$(".tabs .tabs-title").on("click",(function(){$(".tabs .tabs-title").removeClass("has--opacity"),$(this).siblings().addClass("has--opacity")})),$(".single--service").on("click",(function(){var e=$(this).data("modal"),a=$(document).find("[id='"+e+"']");$(".modal--view").removeClass("is--visible"),a.addClass("is--visible")})),$(".modal--service i.fa-times").on("click",(function(){$(".modal--view").removeClass("is--visible")})),$(".single--card").on("click",(function(){var e=$(this).data("modal"),a=$(document).find("[id='"+e+"']");$(".modal--view").removeClass("is--visible"),a.addClass("is--visible")})),$(".modal--service i.fa-times").on("click",(function(){$(".modal--view").removeClass("is--visible")})),jQuery(".hamburger--menu").on("click",(function(){jQuery(".mobile-navigation").toggleClass("is--open"),jQuery(".hamburger--menu").toggleClass("shrinked")})),jQuery(".top--bar i").on("click",(function(){jQuery(".top--bar").addClass("is--hide"),jQuery("#masthead").addClass("no--top-bar")})),$(".logos-slider").length&&$(".logos-slider").each((function(){var e=$(this);console.log(e);new Swiper("#"+e.attr("id"),{speed:700,spaceBetween:16,loop:!0,breakpointsInverse:!0,breakpoints:{320:{slidesPerView:1},768:{slidesPerView:4,spaceBetween:16},992:{slidesPerView:6,spaceBetween:16},1200:{slidesPerView:6,spaceBetween:16}},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}})})),jQuery("#reviews").length)new Swiper("#reviews",{speed:700,spaceBetween:16,loop:!0,centeredSlides:!0,breakpointsInverse:!0,breakpoints:{320:{slidesPerView:1},768:{slidesPerView:2,spaceBetween:16},992:{slidesPerView:3,spaceBetween:16},1200:{slidesPerView:3,spaceBetween:16}},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}});if(jQuery("#network").length)new Swiper("#network",{speed:700,spaceBetween:16,loop:!0,breakpointsInverse:!0,breakpoints:{320:{slidesPerView:1},768:{slidesPerView:3,spaceBetween:16},992:{slidesPerView:5,spaceBetween:16},1200:{slidesPerView:5,spaceBetween:32}},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}});if(jQuery("#team-slider").length)new Swiper("#team-slider",{speed:700,spaceBetween:16,loop:!0,breakpointsInverse:!0,breakpoints:{320:{slidesPerView:1},768:{slidesPerView:2,spaceBetween:16},992:{slidesPerView:4,spaceBetween:16},1200:{slidesPerView:4,spaceBetween:20}},pagination:{el:".swiper-pagination",type:"bullets",clickable:!0}});jQuery((function(){if(jQuery("#map-mg").length)function e(){var e={center:new google.maps.LatLng(41.881050266453165,12.508417275442664),zoom:16,disableDefaultUI:!0,scrollwheel:!1},a=new google.maps.Map(document.getElementById("map-mg"),e);new google.maps.Marker({position:new google.maps.LatLng(41.881050266453165,12.508417275442664),map:a})}if(jQuery("#map-cs").length)function a(){var e={center:new google.maps.LatLng(41.888181413917884,12.518754618489767),zoom:16,disableDefaultUI:!0,scrollwheel:!1},a=new google.maps.Map(document.getElementById("map-cs"),e);new google.maps.Marker({position:new google.maps.LatLng(41.888181413917884,12.518754618489767),map:a})}jQuery("#cookie-bar").length?(jQuery("#map-mg").length&&jQuery(".cb-enable").on("click",e),jQuery("#map-cs").length&&jQuery(".cb-enable").on("click",a)):(jQuery("#map-mg").length&&e(),jQuery("#map-cs").length&&a())}))}));