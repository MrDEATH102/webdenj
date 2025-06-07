<?php
get_header();

    echo '<main class="home">';

    //Get Section1 Template
    get_template_part('templates/index/section1','index');

    //Get Section2 Template
    get_template_part('templates/index/section2','index');

    //Get Section3 Template
    get_template_part('templates/index/section3','index');

    //Get Section4 Template
    get_template_part('templates/index/section4','index');

    //Get Section5 Template
    get_template_part('templates/index/section5','index');

    //Get Section6 Template
    get_template_part('templates/index/section6','index');

    //Get Section7 (Articles) Template
    get_template_part('templates/index/section7','index');


    echo '</main>';
get_footer();
?>