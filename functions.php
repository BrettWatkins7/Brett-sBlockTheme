<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lesson One
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function lesson_one_style() {
	wp_enqueue_style(
		'lesson-one-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'lesson_one_style' );