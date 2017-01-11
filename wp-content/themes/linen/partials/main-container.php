<div class="main-container col1-layout">
    <div class="container">
        <div class="main">
            <div class="col-main">
                <div class="padding-s">
                    <?php
                    // TODO
                    get_template_part('partials/em/register', 'validation-message');
                    ?>
                    <div class="widget widget-new-products">
                        <div class="widget-title">
                            <h2>New Products</h2>
                        </div>
                        <div class="carousel_nav">
                            <a class="btns prev_new"><span class="material-design-keyboard54"></span></a>
                            <a class="btns next_new"><span class="material-design-keyboard53"></span></a>
                        </div>

                        <div class="owl-carousel-wrapper owl-new-products products-grid">
                            <div class="owl-carousel owl-new owl-theme" id="owl-new-products">

                                <?php
                                $i = 0;
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 16,
                                    'orderby' => array(
                                        'date' => 'DESC',
                                        'rate_points' => 'DESC',
                                    ),
                                );
                                $loop = new WP_Query($args);
                                $new_products = array();
                                if ($loop->have_posts()) {
                                    while ($loop->have_posts()) {
                                        $loop->the_post();

                                        $new_products[$i]['ID'] = get_the_ID();
                                        $image = get_field('feature_image');
                                        $full = $image['url'];
                                        $new_products[$i]['image'] = $full;
                                        $new_products[$i]['title'] = get_the_title();
                                        $new_products[$i]['product_code'] = get_field('product_code');
                                        //
                                        while (have_rows('sale_status')) {
                                            the_row();

                                            $status = get_sub_field('status');
                                            $p_sale_status = array('new' => 0, 'sale' => 0);
                                            if (isset($status) && is_array($status)) {
                                                foreach ($status as $data) {
                                                    if (strtolower($data) == 'new') {
                                                        $p_sale_status['new'] = 1;
                                                    }
                                                    if (strtolower($data) == 'sale') {
                                                        $p_sale_status['sale'] = 1;
                                                    }
                                                }
                                            }
                                            $new_products[$i]['sale_status'] = $p_sale_status;
                                            $new_products[$i]['price'] = get_sub_field('price');
                                            $new_products[$i]['discount_price'] = get_sub_field('discount_price');
                                            ;
                                        }
                                        //
                                        $new_products[$i]['rate_points'] = get_field('rate_points');
                                        $new_products[$i]['in_stock'] = get_field('in_stock');
                                        $new_products[$i]['permalink'] = get_the_permalink();

                                        $i++;
                                    }
                                }
                                //
                                wp_reset_postdata();

                                $i = 0;
                                foreach ($new_products as $data):
                                    if ($i % 2 == 0) :
                                        ?>
                                        <div class="carousel_col">
                                            <?php
                                        endif;
                                        ?>
                                        <div class="item index_item">
                                            <div class="item_placeholder"></div>
                                            <div class="item_wrap">
                                                <div class="product-image-container">
                                                    <div class="label-product">
                                                        <?php if ($data['sale_status']['new'] == 1): ?>
                                                            <span class="new">New</span>
                                                        <?php endif; ?>
                                                        <?php if ($data['sale_status']['sale'] == 1): ?>
                                                            <span class="sale">Sale</span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <a href="<?php _e($data['permalink']) ?>" title="Suit blazer" class="product-image" itemprop="url">
                                                        <img id="product-collection-image-<?php _e($data['ID']) ?>" src="<?php _e($data['image']) ?>" alt="<?php _e($data['title']) ?>" width="360" height="446" itemprop="image">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h2 class="product-name" itemprop="name"><a href="<?php _e($data['permalink']) ?>" title="Suit blazer"><?php _e($data['title']) ?></a></h2>
                                                    <div class="price-box">
                                                        <?php if ($data['sale_status']['sale'] == 1 || $data['discount_price'] != 0): ?>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price" id="product-price-<?php _e($data['ID']) ?>"><?php _e($data['discount_price']) ?>₫</span>
                                                            </p>
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price" id="old-price-<?php _e($data['ID']) ?>"><?php _e($data['price']) ?>₫</span>
                                                            </p>
                                                        <?php else: ?>
                                                            <span class="regular-price" id="product-price-<?php _e($data['ID']) ?>">
                                                                <span class="price"><?php _e($data['price']) ?></span>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="ratings">
                                                        <div class="rating-box stars">
                                                            <i class="review-icon"></i>
                                                            <i class="review-icon"></i>
                                                            <i class="review-icon"></i>
                                                            <i class="review-icon"></i>
                                                            <i class="review-icon"></i>
                                                            <div class="rating" style="width:<?php _e($data['rate_points'] * 100 / 5) ?>%">
                                                                <div class="mask">
                                                                    <i class="review-icon"></i>
                                                                    <i class="review-icon"></i>
                                                                    <i class="review-icon"></i>
                                                                    <i class="review-icon"></i>
                                                                    <i class="review-icon"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--
                                                        <span class="amount">
                                                            <a href="#" onclick="var t = opener ? opener.window : window; t.location.href = '#'; return false;">1 Review(s)</a>
                                                        </span>
                                                        -->
                                                    </div>
                                                    <!--
                                                    <div class="actions">
                                                        <a href="#" class="btns_cart" title="Add to Cart"><span class="fl-line-icon-set-shopping63"></span></a>
                                                        <ul class="add-to-links">
                                                            <li><a href="#" class="link-wishlist"><span>Add to Wishlist</span></a></li>
                                                            <li><a href="#" class="link-compare"><span>Add to Compare</span></a></li>
                                                        </ul>
                                                    </div>
                                                    -->
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                        if ($i % 2 == 0 || $i == count($new_products)) :
                                            ?>
                                        </div> <!-- // carousel_col -->
                                        <?php
                                    endif;
                                endforeach;
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- // END main-container -->