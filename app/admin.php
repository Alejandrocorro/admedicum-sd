<?php

/**
 * Theme admin.
 */

namespace App;

use WP_Customize_Manager;

use function Roots\asset;

/**
 * Register the `.brand` selector as the blogname.
 *
 * @param  \WP_Customize_Manager $wp_customize
 * @return void
 */
add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Register the customizer assets.
 *
 * @return void
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset('scripts/customizer.js')->uri(), ['customize-preview'], null, true);
});


add_action('admin_enqueue_scripts', function(){
    wp_register_style( 'custom_wp_admin_css', get_stylesheet_directory_uri() . '/resources/assets/styles/config/wp-admin.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
});


add_action( 'admin_enqueue_scripts', function() {
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
 	wp_enqueue_script( 'jsAdminCustom', get_stylesheet_directory_uri() . '/resources/assets/scripts/util/wp-admin.js', array( 'jquery' ) );
});
