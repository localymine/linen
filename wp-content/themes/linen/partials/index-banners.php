<?php
$i_slider = 0;
$args = array(
    'post_type' => 'index_banners',
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
<div class="index_banners">
    <div class="container">
        <div class="main_holder">
            <a href="http://ld-magento.template-help.com/magento_58878/accessories.html/">
                <div class="ban_img"><span></span><img src="http://ld-magento.template-help.com/magento_58878/skin/frontend/tm_themes/theme348k/images/media/holder_big.png" alt=""></div>
                <div class="ban_holder">
                    <h2>Two<br>ways to</h2>
                    <h3>Wear</h3>
                    <h4>Shop now!</h4>
                </div>
            </a>
        </div>
        <div class="small_banners">
            <div class="small_holder sm1">
                <a href="http://ld-magento.template-help.com/magento_58878/collections.html/">
                    <div class="ban_img"><span></span><img src="http://ld-magento.template-help.com/magento_58878/skin/frontend/tm_themes/theme348k/images/media/holder_small.png" alt=""></div>
                    <div class="ban_holder">
                        <h2>50% <br>off</h2>
                        <h3>Shop now!</h3>
                    </div>
                </a>
            </div>
            <div class="small_holder sm2">
                <a href="http://ld-magento.template-help.com/magento_58878/women.html/">
                    <div class="ban_img"><span></span><img src="http://ld-magento.template-help.com/magento_58878/skin/frontend/tm_themes/theme348k/images/media/holder_small.png" alt=""></div>
                    <div class="ban_holder">
                        <h3>Cod</h3>
                        <h2>Cash<br>on delivery</h2>
                    </div>
                </a>
            </div>
            <div class="small_holder sm3">
                <a href="http://ld-magento.template-help.com/magento_58878/accessories.html/">
                    <div class="ban_img"><span></span><img src="http://ld-magento.template-help.com/magento_58878/skin/frontend/tm_themes/theme348k/images/media/holder_small.png" alt=""></div>
                    <div class="ban_holder">
                        <h2>Order<br>Return</h2>
                        <h3>Returns within<br>14 days</h3>
                    </div>
                </a>
            </div>
            <div class="small_holder sm4">
                <a href="http://ld-magento.template-help.com/magento_58878/men.html/">
                    <div class="ban_img"><span></span><img src="http://ld-magento.template-help.com/magento_58878/skin/frontend/tm_themes/theme348k/images/media/holder_small2.png" alt=""></div>
                    <div class="ban_holder">
                        <h2>Free <br>shipping</h2>
                        <h3>on orders over $99.</h3>
                        <h4>This offer is valid on all<br>our store items.</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>