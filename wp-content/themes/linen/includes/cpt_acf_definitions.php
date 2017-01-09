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
                        'instructions' => '<h2></h2><h3></h3><h4></h4>',
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
                'key' => 'field_5873630938bf6',
                'label' => 'Banners',
                'name' => 'banners',
                'type' => 'repeater',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5873644a38bf7',
                        'label' => 'Select Banners',
                        'name' => 'select_banners',
                        'type' => 'select',
                        'column_width' => '',
                        'choices' => array(
                            'Main Banner' => 'Main Banner',
                            'Small Banner' => 'Small Banner',
                        ),
                        'default_value' => '',
                        'allow_null' => 0,
                        'multiple' => 0,
                    ),
                    array(
                        'key' => 'field_587364d938bf8',
                        'label' => 'Main Banner',
                        'name' => 'main_banner',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_5873644a38bf7',
                                    'operator' => '==',
                                    'value' => 'Main Banner',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_587364e938bf9',
                                'label' => 'Description',
                                'name' => 'description',
                                'type' => 'textarea',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 3,
                                'formatting' => 'html',
                            ),
                            array(
                                'key' => 'field_5873651838bfa',
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
                                'key' => 'field_5873652238bfb',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
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
                        'key' => 'field_5873653738bfc',
                        'label' => 'Small Banners',
                        'name' => 'small_banners',
                        'type' => 'repeater',
                        'conditional_logic' => array(
                            'status' => 1,
                            'rules' => array(
                                array(
                                    'field' => 'field_5873644a38bf7',
                                    'operator' => '==',
                                    'value' => 'Small Banner',
                                ),
                            ),
                            'allorany' => 'all',
                        ),
                        'column_width' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5873656838bfd',
                                'label' => 'Description',
                                'name' => 'description',
                                'type' => 'textarea',
                                'column_width' => '',
                                'default_value' => '',
                                'placeholder' => '',
                                'maxlength' => '',
                                'rows' => 3,
                                'formatting' => 'html',
                            ),
                            array(
                                'key' => 'field_5873657838bfe',
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
                                'key' => 'field_5873658238bff',
                                'label' => 'Image',
                                'name' => 'image',
                                'type' => 'image',
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
                'row_min' => 1,
                'row_limit' => 2,
                'layout' => 'row',
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
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array(
                0 => 'permalink',
            ),
        ),
        'menu_order' => 0,
    ));
}
