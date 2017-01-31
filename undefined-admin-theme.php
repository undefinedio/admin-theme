<?php

/*
Plugin Name: Undefined Admin Theme
Plugin URI: http://weareundefined.be
Description: A clean, simplified WordPress Admin theme
Author: Ryan Sommers & Undefined
Version: 1.1.7
Author URI: http://weareundefined.be
*/

function undefined_files()
{
    wp_enqueue_style('undefined-admin-theme', plugins_url('css/slate.css', __FILE__), array(), '1.1.7');
    wp_enqueue_script('slate', plugins_url("js/slate.js", __FILE__), array('jquery'), '1.1.7');
}

add_action('admin_enqueue_scripts', 'undefined_files');
add_action('login_enqueue_scripts', 'undefined_files');

function undefined_add_editor_styles()
{
    add_editor_style(plugins_url('css/editor-style.css', __FILE__));
}

add_action('after_setup_theme', 'undefined_add_editor_styles');

add_action('admin_head', 'undefined_colors');
add_action('login_head', 'undefined_colors');
function undefined_colors()
{
    include('css/dynamic.php');
}

function undefined_get_user_admin_color()
{
    $user_id = get_current_user_id();
    $user_info = get_userdata($user_id);
    if (!($user_info instanceof WP_User)) {
        return;
    }
    $user_admin_color = $user_info->admin_color;

    return $user_admin_color;
}

// Remove the hyphen before the post state
add_filter('display_post_states', 'undefined_post_state');
function undefined_post_state($post_states)
{
    if (!empty($post_states)) {
        $state_count = count($post_states);
        $i = 0;
        foreach ($post_states as $state) {
            ++$i;
            ($i == $state_count) ? $sep = '' : $sep = '';
            echo "<span class='post-state'>$state$sep</span>";
        }
    }
}

?>
