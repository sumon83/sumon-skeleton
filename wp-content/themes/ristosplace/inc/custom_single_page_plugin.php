<?php

/**
 * @package Single page custome portfolio post type
 * @version 1.6
 */
/*
  Plugin Name: Portfolio Post Type
  Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
  Author: Sumon
  Version: 1.0
 */

class Portfolio_CPT
{

    public static function init()
    {
        if (current_theme_supports('portfolio')) {
            add_action('init', array(__CLASS__, 'register_cpt'));
        }
    }

    public static function register_cpt()
    {

        $labels = array(
            'name' => __('Portfolio', 'portfolio'),
            'singular_name' => __('Portfolio', 'portfolio'),
            'add_new' => __('Add New Portfolio', 'portfolio'),
            'add_new_item' => __('Add New Portfolio', 'portfolio'),
            'new_item' => __('New Portfolio', 'portfolio'),
            'edit_item' => __('Edit Portfolio', 'portfolio'),
            'view_item' => __('View Portfolio', 'portfolio'),
            'all_items' => __('All Portfolio', 'portfolio'),
            'search_items' => __('Search the Portfolio', 'portfolio'),
            'not_found' => __('No portfolio items found', 'portfolio'),
            'not_found_in_trash' => __('No portfolio items found in Trash', 'portfolio'),
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-book-alt',
            'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'page-attributes')
        );

        register_post_type('portfolio', $args);
    }

}

Portfolio_CPT::init();
