<section class="section2 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section2_suptitle">- دسته بندی های وب دنج -</h3>
                <h2 class="section2_title">دوره ها و محصولات در دسته بندی های مختلف</h2>
            </div>
        </div>
        <div class="row">
            <div class="category_slider">
                <?php
                $args = array(
                    'taxonomy'  => 'product_cat',
                );
                $categories = get_terms($args);
                if (!empty($categories)):
                ?>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($categories as $category):
                                $cat_id = $category->term_id;
                                $cat_name = $category->name;
                                $cat_count = $category->count;
                            ?>
                                <div class="swiper-slide">
                                    <div class="category_slider_item d-flex align-items-center justify-content-start">
                                        <a href="<?php echo esc_url(get_term_link($cat_id)); ?>" class="category_slider_item--link"></a>
                                        <i class="fab fa-elementor"></i>
                                        <p class="category_slider_item--info">
                                            <span class="title d-block"><?php echo $cat_name; ?></span>
                                            <span class="value d-block"><?php echo $cat_count; ?> آموزش آنلاین</span>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="category_slider_nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                <?php else: ?>
                    <p class="text-center">دسته بندی برای محصولات تعریف نکرده اید.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>