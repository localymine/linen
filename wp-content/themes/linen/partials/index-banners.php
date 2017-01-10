<?php
$i = 0;
$args = array(
    'post_type' => 'index_banners',
    'posts_per_page' => 1,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
$index_banners = array();
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        while (have_rows('main_banner')) {
            the_row();
            $image = get_sub_field('image');
            $full = $image['url'];
            $index_banners['main_banner']['image'] = $full;
            $index_banners['main_banner']['url'] = get_sub_field('url');
            $index_banners['main_banner']['description'] = get_sub_field('description');
        }
        //
        while (have_rows('small_banners')) {
            the_row();
            $image = get_sub_field('image');
            $full = $image['url'];
            $index_banners['small_banners'][$i]['image'] = $full;
            $index_banners['small_banners'][$i]['url'] = get_sub_field('url');
            $index_banners['small_banners'][$i]['description'] = get_sub_field('description');
            $i++;
        }
    }
}
//
wp_reset_postdata();
?>
<div class="index_banners">
    <div class="container">
        <div class="main_holder">
            <a href="<?php _e($index_banners['main_banner']['url']) ?>">
                <div class="ban_img"><span></span><img src="<?php _e($index_banners['main_banner']['image']) ?>" alt=""></div>
                <div class="ban_holder">
                    <?php _e($index_banners['main_banner']['description']) ?>
                </div>
            </a>
        </div>
        <div class="small_banners">
            <?php
            $i = 1;
            foreach ($index_banners['small_banners'] as $data):
                ?>
                <div class="small_holder sm<?php _e($i) ?>">
                    <a href="<?php _e($data['url']) ?>">
                        <div class="ban_img"><span></span><img src="<?php _e($data['image']) ?>" alt=""></div>
                        <div class="ban_holder">
                            <?php _e($data['description']) ?>
                        </div>
                    </a>
                </div>
                <?php
                $i++;
            endforeach;
            ?>
        </div>
    </div>
</div>