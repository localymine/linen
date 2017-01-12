<div class="bottom_banners">
    <div class="container">
        <div class="bottom_banners_wrapper">
            <?php
            $i = 0;
            $args = array(
                'post_type' => 'bottom_banners',
                'posts_per_page' => 1,
                'orderby' => array('date' => 'DESC'),
            );
            $loop = new WP_Query($args);
            $home_slider = array();
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    while (have_rows('bottom_banners')):
                        the_row();
                        $image = get_sub_field('image');
                        $full = $image['url'];
                        ?>

                        <div class="bottom_ban bb<?php _e(++$i) ?>">
                            <a href="<?php _e(get_sub_field('url')) ?>">
                                <div class="ban_img"><span></span><img src="<?php _e($full) ?>" alt=""></div>
                                <div class="ban_holder">
                                    <?php _e(get_sub_field('description')) ?>
                                </div>
                            </a>
                        </div>

                        <?php
                    endwhile;
                endwhile;
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>