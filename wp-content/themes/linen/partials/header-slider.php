<div class="header_slider">
    <?php
    $i_slider = 0;
    $args = array(
        'post_type' => 'home_slider',
        'posts_per_page' => 1,
        'orderby' => array('date' => 'DESC'),
    );
    $loop = new WP_Query($args);
    $home_slider = array();
    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            while (have_rows('images')) {
                the_row();
                $image = get_sub_field('image');
                $full = $image['url'];
                $home_slider[$i_slider]['image'] = $full;
                $home_slider[$i_slider]['url'] = get_sub_field('url');
                $home_slider[$i_slider]['description'] = get_sub_field('description');
                $i_slider++;
            }
        }
    }
//
    wp_reset_postdata();
    ?>
    <div class="container">
        <div class="fluid_container_wrap">
            <div class="fluid_container">
                <div class="camera_wrap camera_orange_skin" id="camera_wrap">
                    <?php foreach ($home_slider as $data): ?>
                    <div data-src="<?php _e($data['image']) ?>" data-link="<?php _e($data['url']) ?>">
                        <div class="camera_caption fadeIn">
                            <div>
                                <div class="right_slider_side sl_1">
                                    <div class="slider_holder">
                                        <?php _e($data['description']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>