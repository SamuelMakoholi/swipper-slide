<?php
/*
Plugin Name: MSU Slider
Description: A custom slider plugin similar to Revolution Slider.
Version: 1.0
Author: Samuel Makoholi
*/

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Enqueue scripts and styles
function custom_slider_enqueue_scripts()
{
    // Custom slider CSS and JS
    wp_enqueue_style('custom-slider-style', plugins_url('css/slider.css', __FILE__));
    wp_enqueue_script('custom-slider-script', plugins_url('js/slider.js', __FILE__), array('jquery'), null, true);
    // Swiper.js CSS from CDN
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    // Swiper.js JavaScript from CDN
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_slider_enqueue_scripts');

// Shortcode to display the slider
function custom_slider_shortcode($atts)
{
    ob_start();
    include(plugin_dir_path(__FILE__) . 'templates/slider-template.php');
    return ob_get_clean();
}
add_shortcode('slider_msu_01', 'custom_slider_shortcode');
