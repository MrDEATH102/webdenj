jQuery(document).ready(function ($) {


    //Ajax request search popup
    $('#search__widget__input').on('input', function () {

        //define keyword
        let keyword = $(this).val();

        //check keyword length
        if (keyword.length > 3) {

            // Ajax request 
            $.ajax({
                method : 'POST',
                url : '/wp-admin/admin-ajax.php',
                data : {
                    action : 'search_ajax_return',
                    key : keyword
                },
                beforeSend : () => {
                    $('.search__widget .fa-spinner').fadeIn(0);
                },
                complete : (response) => {
                    $('.search__widget .fa-spinner').fadeOut(0);
                    console.log(response);
                }
            });
        }
    })
});