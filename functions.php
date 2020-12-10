<?php
add_theme_support('post-thumbnails');

function count_user_posttype($userid,$posttype) {
    global $wpdb;
    $where = get_posts_by_author_sql($posttype, true, $userid,true);
    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
    return $count;
}

add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}
