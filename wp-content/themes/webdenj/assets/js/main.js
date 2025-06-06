jQuery(document).ready(function ($) {


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
        overlay_section_hide();
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
}