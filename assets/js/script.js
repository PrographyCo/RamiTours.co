document.querySelector('body').onload = function(){
        let va = document.querySelector('.loader');
        va.parentNode.removeChild(va);

        document.querySelector('body').style.overflowY = 'initial';
    }
$(document).ready(function () {

    new Swiper(' .home .swiper-container', {
        navigation: {
            nextEl: '.swiper-button-prev',
            prevEl: '.swiper-button-next',
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });

    var $header_top = $('.header-top');

    // toggle menu  web
    $header_top.find('a.toggle-menu').on('click', function() {
        $(this).parent().toggleClass('open-menu ');
        if (document.querySelector('body').style.overflowY == 'initial'){
            document.querySelector('body').style.overflowY = 'hidden';
        }else{
            document.querySelector('body').style.overflowY = 'initial';
        }

    });
    new Swiper('.slider-about  .swiper-container', {
        slidesPerView: 2.5,
        spaceBetween: 23,
        centeredSlides: false,

        type: 'progressbar',
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ' .slider-about .swiper-pagination',
            type: 'progressbar',
            clickable: true,
        },


        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 14,
                centeredSlides: false,


            },

            576: {
                slidesPerView: 2.5,
                spaceBetween: 23,
                centeredSlides: false,



            },

        }
    });








// Favorite Button - Heart
    $('.favme').click(function() {
        $(this).toggleClass('active');
    });

    /* when a user clicks, toggle the 'is-animating' class */
    $(".favme").on('click touchstart', function(){
        $(this).toggleClass('is_animating');
    });

    /*when the animation is over, remove the class*/
    $(".favme").on('animationend', function(){
        $(this).toggleClass('is_animating');
    });






    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

});

if (document.querySelector('.page-title h1') == 'Services'){
    window.onscroll = function(){
        if(window.scrollY > 50){
            document.querySelector('.header-top').classList.add("header-stuff");
            document.querySelector('.page-title h1').style.position = 'fixed';
            document.querySelector('.page-title h1').style.top = '1%';
            document.querySelector('.page-title h1').style.left = '47%';
            document.querySelector('.page-title h1').style.zIndex = '99';
            document.querySelector('.page-title h1').style.fontSize = '2rem';
        }else{
            document.querySelector('.header-top').classList.remove("header-stuff");
            document.querySelector('.page-title h1').style.position = 'initial';
            document.querySelector('.page-title h1').style.top = 'initial';
            document.querySelector('.page-title h1').style.left = 'initial';
            document.querySelector('.page-title h1').style.zIndex = 'initial';
            document.querySelector('.page-title h1').style.fontSize = '2.5rem';
        }
    }
}

document.onkeydown = function (e) {
    if (e.key === 'Escape'){
        document.querySelector('#message').style.display = 'none';
    }
}

document.querySelector('#message').onclick = function (e) {
    document.querySelector('#message').style.display = 'none';
}

document.querySelector('#message div').onclick = function (e) {
    e.stopPropagation();
}