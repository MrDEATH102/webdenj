jQuery(document).ready(function ($) {


    //Ajax request search box popup
    $('#search__widget__input').on('input', function () {

        //Define keyword
        let keyword = $(this).val();

        //Check keyword length
        if (keyword.length > 3) {

            //Ajax request
            $.ajax({
                method: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'search_ajax_return',
                    key: keyword
                },
                beforeSend: () => {
                    $('.search__widget .fa-spinner').fadeIn(0);
                },
                complete: (response) => {
                    $('.search__widget .fa-spinner').fadeOut(0);
                    $('.search__widget__result').html(response.responseText);
                }
            });
        } else {
            $('.search__widget__result').html('');
        }

    });


});