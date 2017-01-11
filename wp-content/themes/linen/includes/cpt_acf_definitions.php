<?php

/*
 * This file is custom post type, custom taxonomy and custom fields
 * definition file.
 * 
 * Exported from CPT UI & Advanced Custom Fields
 */

/* ---------------------------------------------------------------------------- */
/* post type definitions */
/* ---------------------------------------------------------------------------- */
add_action('init', 'cptui_register_my_cpts');

function cptui_register_my_cpts() {

    $labels = array(
        "name" => __('Home Slider', 'linenfashion'),
        "singular_name" => __('Home Slider', 'linenfashion'),
    );

    $args = array(
        "label" => __('Home Slider', 'linenfashion'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "home_slider", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/assets/icons/slider-1.png',
        "supports" => array("title"),);
    register_post_type("home_slider", $args);

    $labels = array(
        "name" => __('Index Banners', 'linenfashion'),
        "singular_name" => __('Index Banners', 'linenfashion'),
    );

    $args = array(
        "label" => __('Index Banners', 'linenfashion'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "index_banners", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/assets/icons/slider.png',
        "supports" => array("title"),);
    register_post_type("index_banners", $args);

    $labels = array(
        "name" => __('Brand List', 'linenfashion'),
        "singular_name" => __('Brand List', 'linenfashion'),
    );

    $args = array(
        "label" => __('Brand List', 'linenfashion'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => array("slug" => "brands_list", "with_front" => true),
        "query_var" => true,
        "menu_position" => 26,
        "menu_icon" => get_template_directory_uri() . '/assets/icons/puzzle.png',
        "supports" => array("title"),);
    register_post_type("brands_list", $args);

// End of cptui_register_my_cpts()
}

/* ---------------------------------------------------------------------------- */
/* custom fields definitions */
/* ---------------------------------------------------------------------------- */
if (function_exists("register_field_group")) {
    register_field_group(array(
        'id' => 'acf_home-slider',
        'title' => 'Home Slider',
        'fields' => array(
            array(
                'key' => 'field_58733f8e91b74',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5873401491b76',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => 'Use tags: h2 h3 h4 strong',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => '',
                        'formatting' => 'html',
                    ),
                    array(
                        'key' => 'field_5873402a91b77',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5873403c91b78',
                        'label' => 'image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Size 1170x535',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => '',
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'home_slider',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'acf_after_title',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_index-banners',
        'title' => 'Index Banners',
        'fields' => array(
            array(
                'key' => 'field_587444195ab84',
                'label' => 'Main Banner',
                'name' => 'main_banner',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5874442a5ab85',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => 'Use tags: h2 h3 h4 strong',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => 3,
                        'formatting' => 'html',
                    ),
                    array(
                        'key' => 'field_587444995ab86',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_587444a35ab87',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Size 570x536',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => 1,
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
            array(
                'key' => 'field_587444c65ab88',
                'label' => 'Small Banners',
                'name' => 'small_banners',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_587444d35ab89',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'textarea',
                        'instructions' => 'Use tags: h2 h3 h4 strong',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'maxlength' => '',
                        'rows' => 3,
                        'formatting' => 'html',
                    ),
                    array(
                        'key' => 'field_587444fb5ab8a',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_587445075ab8b',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Size 285x268',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => 4,
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'index_banners',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'acf_after_title',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_products',
        'title' => 'Products',
        'fields' => array(
            array(
                'key' => 'field_58749b2a58800',
                'label' => 'Availability',
                'name' => 'availability',
                'type' => 'radio',
                'instructions' => 'In Stock : This item is physically in stock and ready for immediate dispatch and also available in our retail stores.<br>
	Back Order : We do not have this item currently in our warehouse, but stock is readily available from the supplier.<br>
	Pre Order : The item is to be released soon. If you order now you will receive the first priority shipment. Placing a preorder is especially recommended for high demand items to avoid missing out.<br>
	Sold Out : This item is currently unavailable and/or discontinued.',
                'choices' => array(
                    'In Stock' => 'In Stock',
                    'Back Order' => 'Back Order',
                    'Pre Order' => 'Pre Order',
                    'Sold Out' => 'Sold Out',
                ),
                'other_choice' => 0,
                'save_other_choice' => 0,
                'default_value' => '',
                'layout' => 'horizontal',
            ),
            array(
                'key' => 'field_58748188587fe',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_587482b1587ff',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Size thumb: 100x124; full: 1000x1238',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => 6,
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
            array(
                'key' => 'field_5874a2d658804',
                'label' => 'Additional Information',
                'name' => 'additional_information',
                'type' => 'repeater',
                'instructions' => 'LINING MATERIAL, ACCESSORIES, ORIGIN, MATERIAL, CONDITIONS, SEASON, STYLE, COLLECTION, HANGER, ITEM WEIGHT, KG',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5874a43e58805',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5874a46858806',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
            array(
                'key' => 'field_5874a61558807',
                'label' => 'Video',
                'name' => 'video',
                'type' => 'textarea',
                'instructions' => 'Youtube\'s frame embedded',
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'html',
            ),
            array(
                'key' => 'field_5874a71658808',
                'label' => 'Options',
                'name' => 'options',
                'type' => 'repeater',
                'instructions' => 'Impregnated, Lining color, Buttons color',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5874a7bd58809',
                        'label' => 'Choice',
                        'name' => 'choice',
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array(
                            'Select' => 'Select',
                            'Radio' => 'Radio',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_5874a7e55880a',
                        'label' => 'Choose Select',
                        'name' => 'choose_select',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_5874a7bd58809',
                                    'operator' => '==',
                                    'value' => 'Select',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5874a84b5880b',
                                'label' => 'Key',
                                'name' => 'key',
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5874a8665880c',
                                'label' => 'Value',
                                'name' => 'value',
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                        ),
                        'row_min' => 1,
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => 'Add Row',
                    ),
                    array(
                        'key' => 'field_5874a8b85880d',
                        'label' => 'Choose Radio',
                        'name' => 'choose_radio',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_5874a7bd58809',
                                    'operator' => '==',
                                    'value' => 'Radio',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5874a8cc5880e',
                                'label' => 'Key',
                                'name' => 'key',
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5874a8d85880f',
                                'label' => 'Value',
                                'name' => 'value',
                                'type' => 'text',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'formatting' => 'none',
                                'maxlength' => '',
                            ),
                        ),
                        'row_min' => 1,
                        'row_limit' => '',
                        'layout' => 'table',
                        'button_label' => 'Add Row',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => '',
                'layout' => 'row',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_product-info',
        'title' => 'Basic Product Info',
        'fields' => array(
            array(
                'key' => 'field_58749f1d58801',
                'label' => 'Product Code',
                'name' => 'product_code',
                'type' => 'text',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5875ba0d5f79d',
                'label' => 'Feature Image',
                'name' => 'feature_image',
                'type' => 'image',
                'instructions' => 'Size 360x446<br>
	Thumbnail of products',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array(
                'key' => 'field_5874ab7c87d5b',
                'label' => 'Sale Status',
                'name' => 'sale_status',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5875ac34ca746',
                        'label' => 'Status',
                        'name' => 'status',
                        'type' => 'checkbox',
                        'column_width' => '',
                        'choices' => array(
                            'New' => 'New',
                            'Sale' => 'Sale',
                        ),
                        'default_value' => '',
                        'layout' => 'horizontal',
                    ),
                    array(
                        'key' => 'field_5875ac6eca747',
                        'label' => 'Price',
                        'name' => 'price',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => 0,
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5875ac78ca748',
                        'label' => 'Discount Price',
                        'name' => 'discount_price',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => 0,
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => 1,
                'layout' => 'row',
                'button_label' => 'Add Row',
            ),
            array(
                'key' => 'field_58749f3f58802',
                'label' => 'Rate Points',
                'name' => 'rate_points',
                'type' => 'text',
                'instructions' => 'Don\'t change this point',
                'default_value' => 0,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5874a0b158803',
                'label' => 'In Stock',
                'name' => 'in_stock',
                'type' => 'text',
                'instructions' => 'Number of Products are in stock.',
                'default_value' => 0,
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array(
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array(
        'id' => 'acf_brands-list',
        'title' => 'Brands List',
        'fields' => array(
            array(
                'key' => 'field_5876046660ab6',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5876052b17f75',
                        'label' => 'URL',
                        'name' => 'url',
                        'type' => 'text',
                        'column_width' => '',
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'formatting' => 'none',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5876047160ab7',
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => 'Size 91x88',
                        'column_width' => '',
                        'save_format' => 'object',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                ),
                'row_min' => 1,
                'row_limit' => '',
                'layout' => 'table',
                'button_label' => 'Add Row',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'brands_list',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array(
            'position' => 'acf_after_title',
            'layout' => 'default',
            'hide_on_screen' => array(
                0 => 'permalink',
            ),
        ),
        'menu_order' => 0,
    ));
}
