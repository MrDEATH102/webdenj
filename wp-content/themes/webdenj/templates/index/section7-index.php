<section class="section7 section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section2_suptitle">- جدیدترین مطالب ما -</h3>
                <h2 class="section2_title">مطالب و اخبار جدید حوزه وب</h2>
            </div>
        </div>
        <div class="new_posts_index">
            <div class="row">
                <?php
                    $args = array(
                        'post_type'     => 'post',
                        'orderby'       => 'date',
                        'order'         => 'desc',
                        'posts_per_page'=> 3
                    );
                    $new_blog = new WP_Query($args);
                    if($new_blog->have_posts()):
                        while($new_blog->have_posts()):
                            $new_blog->the_post();
                ?>
                <div class="col-lg-4 col-12">
                    <div class="post_card_index">
                        <div class="post_card_thumbnail">
                            <a href="<?php the_permalink();?>">
                                <img src="<?php the_post_thumbnail_url('full');?>" alt="<?php the_title();?>" title="<?php the_title();?>" class="img-fluid">
                            </a>
                        </div>
                        <h4 class="post_card_title">
                            <a href="<?php the_permalink();?>">
                            <?php the_title();?>
                            </a>
                        </h4>
                        <div class="post_card_progress"></div>
                        <div class="post_card_excerpt">
                            <?php the_excerpt();?>
                        </div>
                        <div class="post_card_info d-flex align-items-center justify-content-between">
                            <p class="post_card_info--author d-flex align-items-center">
                                <i class="fa-duotone fa-pen-to-square"></i>
                               <?php the_author();?>
                            </p>
                            <p class="post_card_info--comment d-flex align-items-center">
                                <i class="fa-duotone fa-comments"></i>
                                <?php
                                    $comments = get_comment_count(get_the_ID());
                                    echo $comments['approved'];
                                ?> دیدگاه
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                        endwhile;
                    else:
                        echo 'به زودی مطالب ما منتشر خواهد شد';
                    endif;
                    wp_reset_postdata();
                ?>
        </div>
        </div>
    </div>
</section>