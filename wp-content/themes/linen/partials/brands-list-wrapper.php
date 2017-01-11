<div class="brands_list_wrapper">
    <div class="container">
        <div class="brands_list">
            <?php
            $args = array(
                'post_type' => 'brands_list',
                'posts_per_page' => 1,
                'orderby' => array('date' => 'DESC'),
            );
            $loop = new WP_Query($args);
            $home_slider = array();
            if ($loop->have_posts()):
                while ($loop->have_posts()):
                    $loop->the_post();
                    while (have_rows('images')):
                        the_row();
                        $image = get_sub_field('image');
                        $full = $image['url'];
                        ?>

                        <a href="<?php _e(get_sub_field('url')) ?>">
                            <img src="<?php _e($full) ?>" alt="">
                        </a>

                        <?php
                    endwhile;
                endwhile;
            endif;

            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>