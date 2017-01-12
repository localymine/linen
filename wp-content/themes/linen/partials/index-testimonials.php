<?php
$i = 0;
$args = array(
    'post_type' => 'quotes',
    'posts_per_page' => 6,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
$quotes = array();
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        //
        $quotes[$i]['image'] = get_the_post_thumbnail_url($post->ID, 'full');
        $quotes[$i]['title'] = get_the_title();
        $quotes[$i]['content'] = get_the_content();
        $quotes[$i]['url'] = get_sub_field('url') != '' ? get_sub_field('url') != '' : get_the_permalink();
        $terms = get_the_terms($post->ID, array('quote_author'));
        $terms_name = ($terms != FALSE) ? $terms[0]->name : '';
        $quotes[$i]['term_name'] = $terms_name;
        $i++;
    }
}
//
wp_reset_postdata();
?>

<div class="testimonials_body_wrapper">
    <div class="owl-testimonials-wrapper container">
        <div class="carousel_nav">
            <a class="btns prev_tes"><span class="material-design-keyboard54"></span></a>
            <a class="btns next_tes"><span class="material-design-keyboard53"></span></a>
        </div>
        <div class="owl-carousel owl-testimonials owl-theme" id="owl-testimonials">

            <?php foreach ($quotes as $data): ?>
                <div class="item index_item testimonials_item">
                    <a href="<?php _e($data['url']) ?>">
                        <div class="test_img"><img src="<?php _e($data['image']) ?>" alt=""></div>
                        <div class="test_holder">
                            <p><?php _e($data['content']) ?></p>
                            <strong><?php _e($data['term_name']) ?></strong>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>