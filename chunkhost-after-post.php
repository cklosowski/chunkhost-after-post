<?php
/*
 Plugin Name: Chunkhost After post
 Plugin URI: https://kungfugrep.com
 Description: Adds a referral to ChunkHost after the post
 Author: Chris Klosowski
 Version: 1.0
 Author URI: https://kungfugrep.com
 */

// Plugin Folder URL
if ( ! defined( 'CAP_PLUGIN_URL' ) ) {
	define( 'CAP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

function cap_afteR_post_content( $content ) {
	if ( ! is_single() ) {
		return $content;
	}

	$content .= '<div style="border: 1px solid #eaeaea; padding: 15px 10px;">';
	$content .= 'This Site is Hosted on a <strong><a href="https://kungfugrep.com/ChunkHost">ChunkHost VPS</a></strong>. I\'ve been using ChunkHost for the last 4 years as my Go-To VPS provider. ';
	$content .= 'Their killer customer service, unbeatable pricing, and rock solid hardware is what keeps me here. ';
	$content .= '<strong><em><a href="https://kungfugrep.com/ChunkHost">Get Started Now</a></em></strong> with their most popular plan at <strong>$9/month</strong>.';
	$content .= '</div>';

	return $content;
}
add_filter( 'the_content', 'cap_after_post_content', 99, 1 );
