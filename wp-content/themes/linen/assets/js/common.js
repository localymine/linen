jQuery(function () {
    jQuery('#camera_wrap').camera({
        alignmen: 'topCenter',
        height: '45.726%',
        minHeight: '130px',
        loader: false,
        pagination: false,
        fx: 'simpleFade',
        navigationHover: false,
        thumbnails: false,
        playPause: false
    });
});

jQuery(document)
        .ready(function () {

            var owl = jQuery("#owl-new-products");
            owl.owlCarousel({
                loop: true,
                nav: false,
                autoHeight: false,
                pagination: false,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 3],
                itemsTablet: [768, 2],
                itemsMobile: [479, 1]
            });

            function MageResize() {
                setTimeout(function () {
                    var bodyWidthTest = jQuery('.wrapper')
                            .width();
                    if (bodyWidthTest >= 1200) {
                        jQuery(".owl-new-products .item .item_placeholder")
                                .removeAttr("style");
                        var prod_img_height = jQuery(".owl-new-products .item .product-image")
                                .height();
                        jQuery(".owl-new-products .item .product-image-container")
                                .height(prod_img_height);
                        jQuery('.owl-new-products .item')
                                .hover(function () {
                                    var bodyWidthTest2 = jQuery('.wrapper')
                                            .width();
                                    if (bodyWidthTest2 >= 1200) {
                                        jQuery(".item_placeholder", this)
                                                .height(prod_img_height);
                                    }
                                },
                                        function () {
                                            var bodyWidthTest2 = jQuery('.wrapper')
                                                    .width();
                                            if (bodyWidthTest2 >= 1200) {
                                                jQuery(".item_placeholder", this)
                                                        .height(0);
                                            }
                                        });
                    } else {
                        jQuery(".owl-new-products .item .item_placeholder")
                                .removeAttr("style");
                        jQuery(".owl-new-products .item .product-image-container")
                                .removeAttr("style");
                    }
                }, 2000);
            }
            jQuery(window)
                    .bind('resize load', MageResize);
            jQuery(".next_new")
                    .click(function () {
                        owl.trigger('owl.next');
                    })
            jQuery(".prev_new")
                    .click(function () {
                        owl.trigger('owl.prev');
                    })
        });

jQuery(document)
        .ready(function () {
            var owl = jQuery("#owl-blog");
            owl.owlCarousel({autoHeight: false, pagination: false, items: 2, itemsDesktop: [1199, 2], itemsDesktopSmall: [991, 2], itemsTablet: [767, 1], itemsMobile: [479, 1]});
            jQuery(".next_blog").click(function () {
                owl.trigger('owl.next');
            })
            jQuery(".prev_blog").click(function () {
                owl.trigger('owl.prev');
            })
        });

jQuery(document)
        .ready(function () {

            var owl = jQuery("#owl-testimonials");
            owl.owlCarousel({
                autoHeight: false,
                autoWidth: true,
                pagination: false,
                items: 1
            });

            jQuery(".next_tes")
                    .click(function () {
                        owl.trigger('owl.next');
                    })
            jQuery(".prev_tes")
                    .click(function () {
                        owl.trigger('owl.prev');
                    })
        });