<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <!-- start header section  -->

    <header class='main_header'>
        <div class="contaner">
            <div class="row">
                <!-- Header logo component  -->
                 <div class="col-lg-2 col-12">
                    <?php get_template_part('templates/header/logo', 'component' ); ?>
                 </div>
                 <!-- Header menu component  -->
                  <div class="col-lg-6 col-12">
                    <?php get_template_part('templates/header/menu', 'component' ); ?>
                  </div>
                  <!-- Header CTA component  -->
                   <div class="col-lg-4 col-12">
                    CTA
                   </div>
            </div>
        </div>
    </header>