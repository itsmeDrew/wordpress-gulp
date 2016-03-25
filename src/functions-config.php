<?php // ==== CONFIGURATION (CUSTOM) ==== //

// Specify custom configuration values in this file; these will override values in `functions-config-defaults.php`
// The general idea here is to allow for themes to be customized for specific installations

///////////////////////////
/// THE EXCERPT
///////////////////////////

function custom_excerpt_length( $length ) {
	return 30;
}

function new_excerpt_more($more) {
       global $post;
	return '... <a href="' . get_permalink($post->ID) . '" class="link--read-more">Read More</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
