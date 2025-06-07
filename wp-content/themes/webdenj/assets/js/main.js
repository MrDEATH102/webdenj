jQuery(document).ready(function ($) {

    //Check theme mode
    if (!localStorage.getItem('theme-mode')) {
        localStorage.setItem('theme-mode', 'light');
        $('body').attr('data-mode', 'light');
    } else {
        localStorage.setItem('theme-mode', localStorage.getItem('theme-mode'));
        $('body').attr('data-mode', localStorage.getItem('theme-mode'));
        if (localStorage.getItem('theme-mode') == 'light') {
            $('.cta__header__right--mode').removeClass('active');
        } else {
            $('.cta__header__right--mode').addClass('active');
        }
    }

    //Show Search popup
    $('.cta__header__right--search').click(function () {
        //Open overlay
        Overlay_section();

        //Open Search box
        $('.search__widget').css({ 'display': 'flex' });
    });

    //Hide search popup
    $('.search__widget .fa-xmark').click(function () {

        //Close form and overlay
        $('.search__widget').css({ 'display': 'none' });
        $('.search__widget__result').html('');
        $('#search__widget__input').val('');
        Overlay_section_hide();

    });

    //Set Theme mode by user
    $('.cta__header__right--mode').on('click', function (e) {

        e.preventDefault();

        let themeMode = localStorage.getItem('theme-mode');
        if (themeMode == 'light') {
            $('body').attr('data-mode', 'dark');
            localStorage.setItem('theme-mode', 'dark');
            $(this).addClass('active');
        } else {
            $('body').attr('data-mode', 'light');
            localStorage.setItem('theme-mode', 'light');
            $(this).removeClass('active');
        }

    });


    //Show and hide minipanel
    $('.loggedin').click(function () {
        $('.main_header .minipanel').toggleClass('active');
    });

    //Category index slider
    const categorySlider = new Swiper('.category_slider .swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        speed: 600,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.category_slider .swiper-button-next',
            prevEl: '.category_slider .swiper-button-prev',
        },
    });

    //Newest Product Slider Index
    const newest_slider = new Swiper('.newest_slider .swiper', {
        slidesPerView: 1,
        spaceBetween: 15,
        // loop: true,
        speed: 600,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.newest_slider .swiper-button-next',
            prevEl: '.newest_slider .swiper-button-prev',
        },
    });

    //Category (Wordpress Template) product slider Index
    const wordpressTemplateSlider = new Swiper('#wordpress_template_slider .swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        // loop: true,
        speed: 800,
        autoplay: {
            delay: 6000,
        },
        navigation: {
            nextEl: '#wordpress_template_slider .swiper-button-next',
            prevEl: '#wordpress_template_slider .swiper-button-prev',
        },
    });

    //Category (Design Training) product slider Index
    const designTrainginSlider = new Swiper('#design_training_slider .swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        // loop: true,
        speed: 800,
        autoplay: {
            delay: 7000,
        },
        navigation: {
            nextEl: '#design_training_slider .swiper-button-next',
            prevEl: '#design_training_slider .swiper-button-prev',
        },
    });

    //Category (Wordpress Plugin) product slider Index
    const wordpressPluginSlider = new Swiper('#wordpress_plugin_slider .swiper', {
        slidesPerView: 3,
        spaceBetween: 30,
        // loop: true,
        speed: 300,
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: '#wordpress_plugin_slider .swiper-button-next',
            prevEl: '#wordpress_plugin_slider .swiper-button-prev',
        },
    });


});


// Overlay show function
function Overlay_section() {
    jQuery('.overlay__section').addClass('active');
}

//Overlay hide function
function Overlay_section_hide() {
    jQuery('.overlay__section').removeClass('active');
    //close Search box
    jQuery('.search__widget').css({ 'display': 'none' });
}