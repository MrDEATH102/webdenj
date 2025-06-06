jQuery(document).ready(function ($) {


    // check theme mode 
    if (!localStorage.getItem('theme-mode')) {
        localStorage.setItem('theme-mode', 'light');
        $('body').attr('data-mode', 'light');
    } else {
        localStorage.setItem('theme-mode', localStorage.getItem('theme-mode'));
        $('body').attr('data-mode', localStorage.getItem('theme-mode'));
        if(localStorage.getItem('theme-mode')=='light'){
            $('.cta__header__right--mode').addClass('active');
        }else{
            $('.cta__header__right--mode').removeClass('active');
        }
    }

    // show and hide search popup
    $('.cta__header__right--search').click(function () {
        // open overlay
        overlay_section()

        // open search box 
        $('.search__widget').css({ 'display': 'flex' });
    });

    //Hide search popup
    $('.search__widget .fa-xmark').click(function () {

        //close form and overlay
        $('.search__widget').css({ 'display': 'none' });
        $('.search__widget__result').html('');
        $('#search__widget__input').val('');
        overlay_section_hide();
    })
    //set theme mode
    $('.cta__header__right--mode').on('click', function (e) {
        e.preventDefault();
        let themeMode = localStorage.getItem('theme-mode');
        if (themeMode == 'light') {
            $('body').attr('data-mode', 'dark');
            localStorage.setItem('theme-mode', 'dark');
            $(this).removeClass('active');
        } else {
            $('body').attr('data-mode', 'light');
            localStorage.setItem('theme-mode', 'light');
            $(this).addClass('active');
        }
    })
})


// overlay show function
function overlay_section() {
    jQuery('.overlay__section').addClass('active');
}

// overlay hide fuction
function overlay_section_hide() {
    jQuery('.overlay__section').removeClass('active');
    //close search box
    jQuery('.search__widget').css({ 'display': 'none' });
    jQuery('.search__widget__result').html('');
    jQuery('#search__widget__input').val('');
}