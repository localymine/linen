<?php

function revcon_change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Product';
    $submenu['edit.php'][5][0] = 'Product';
    $submenu['edit.php'][10][0] = 'Add Product';
    $submenu['edit.php'][16][0] = 'Product Tags';
}

function revcon_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Product';
    $labels->singular_name = 'Product';
    $labels->add_new = 'Add Product';
    $labels->add_new_item = 'Add Product';
    $labels->edit_item = 'Edit Product';
    $labels->new_item = 'Product';
    $labels->view_item = 'View Product';
    $labels->search_items = 'Search Product';
    $labels->not_found = 'No Product found';
    $labels->not_found_in_trash = 'No Product found in Trash';
    $labels->all_items = 'All Product';
    $labels->menu_name = 'Product';
    $labels->name_admin_bar = 'Product';
    $menu_icon = &$wp_post_types['post']->menu_icon;
    $menu_icon = get_template_directory_uri() . '/assets/icons/infinity.png';
    $menu_position = &$wp_post_types['post']->menu_position;
    $menu_position = 26;
}

add_action('admin_menu', 'revcon_change_post_label');
add_action('init', 'revcon_change_post_object');
