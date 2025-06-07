<?php
//Add style and script files to theme
function webdenj_style_script(){

    //enqueue styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap-grid.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper.min.css', array(), '6.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/main-style.css' , array('bootstrap'), time(), 'all' );

    //enqueue scripts
    wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper.min.js', array('jquery'), '11.1.9', true );
    wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'ajax', get_template_directory_uri().'/assets/js/ajax.js', array('jquery'), '1.0.0', true );
    
}
add_action('wp_enqueue_scripts','webdenj_style_script');

//Register nav menus 
if(! function_exists('webdenj_nav_menus')){

    function webdenj_nav_menus(){
        register_nav_menus(
            array(
                'header_menu'   => 'Header Menu',
                'footer_menu'   => 'Footer Menu'
            )
        );
    }

    add_action('after_setup_theme','webdenj_nav_menus');

}


//Ajax serach function
function search_ajax_return(){

    $keyword = sanitize_text_field($_POST['key']);

    $args = array(
        'post_type'     => 'product',
        's'             => $keyword,
        'posts_per_page'=> 4,
        'orderby'       => 'date',
        'order'         => 'DESC'
    );
    $products = new WP_Query($args);

    if($products->have_posts()):
        while($products->have_posts()):
            $products->the_post();
            global $product;
            ?>
            <div class="product d-flex align-items-start justify-content-start">
                <div class="img_box">
                    <a href="<?php the_permalink();?>">
                        <?php the_post_thumbnail('thumbnail');?>
                    </a>
                </div>
                <div class="info_box">
                    <h2 class="title"><?php the_title();?></h2>
                    <p class="price">
                        <?php 
                            $regular = $product->get_regular_price();
                            $sale = $product->get_sale_price();
                            if($sale){
                                echo wc_price($sale);
                            }elseif($regular == 0 || $sale == 0){
                                echo 'رایـگـان!';
                            }else{
                                echo wc_price($regular);
                            }
                        ?>
                    </p>
                    <a href="<?php the_permalink();?>" class="cta">
                        مشاهده محصول
                    </a>
                </div>
            </div>
            <?php
        endwhile;
    else:
        echo 'محصولی یافت نشد!';
    endif;

    wp_die();

}
add_action('wp_ajax_search_ajax_return','search_ajax_return');
add_action('wp_ajax_nopriv_search_ajax_return','search_ajax_return');