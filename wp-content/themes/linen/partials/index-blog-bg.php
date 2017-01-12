<?php
$i = 0;
$args = array(
    'post_type' => 'blog',
    'posts_per_page' => 4,
    'orderby' => array('date' => 'DESC'),
);
$loop = new WP_Query($args);
$blog = array();
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();
        //
        $blog[$i]['date'] = get_the_date('d.m.Y');
        $blog[$i]['image'] = get_the_post_thumbnail_url($post->ID, 'medium');
        $blog[$i]['title'] = get_the_title();
        $blog[$i]['content'] = wp_trim_words(get_the_excerpt(), 20, '...');
        $blog[$i]['permalink'] = get_the_permalink();
        $i++;
    }
}
//
wp_reset_postdata();
?>
<div class="blog-bg">
    <div class="container">
        <div class="widget-title">
            <h2>From the blog</h2>
        </div>
        <div class="carousel_body_wrapper">
            <div class="carousel_nav">
                <a class="btns prev_blog"><span class="material-design-keyboard54"></span></a>
                <a class="btns next_blog"><span class="material-design-keyboard53"></span></a>
            </div>
            <div class="owl-carousel-wrapper">
                <ul class="owl-carousel owl-blog owl-theme" id="owl-blog">

                    <?php foreach ($blog as $data): ?>
                        <li class="blog_item">
                            <div class="postImage">
                                <a href="<?php _e($data['permalink']) ?>"></a>
                                <span></span>
                                <img src="<?php _e($data['image']) ?>" alt="post-img"/>
                            </div>
                            <div class="post_holder">
                                <div class="post_date"><?php _e($data['date']) ?></div>
                                <div class="post_title"><a href="<?php _e($data['permalink']) ?>"><?php _e($data['title']) ?></a></div>
                                <div class="postContent">
                                    <p>
                                        <?php _e($data['content']) ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </div>
</div>