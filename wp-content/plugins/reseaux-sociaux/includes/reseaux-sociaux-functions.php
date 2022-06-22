<?php

/* START - ADMIN CSS */

function my_admin_theme() {
    wp_enqueue_style('my_admin_theme', plugins_url('reseaux-sociaux.css', __FILE__));
}

add_action('admin_enqueue_scripts', 'my_admin_theme');
add_action('login_enqueue_scripts', 'my_admin_theme');

/* END - ADMIN CSS */

/* START - ADMIN SIDEBAR */

function social_media_sidebar() {
    add_menu_page("Réseaux Sociaux", "Reseaux sociaux", "manage_options", "social-media", "social_media_page", "dashicons-share");
}

add_action('admin_menu', 'social_media_sidebar');

/* END - ADMIN SIDEBAR */

/* START - ADMIN TOPBAR */

function social_media_topbar($wp_admin_topbar)
{
    $admin_topbar = array(
        'id' => 'reseaux-sociaux',
        'title' => 'Réseaux Sociaux',
        'href' => admin_url('admin.php?page=social-media'),
    );

    $wp_admin_topbar->add_node($admin_topbar);
}

add_action('admin_bar_menu', 'social_media_topbar', 999);

/* END - ADMIN TOPBAR */