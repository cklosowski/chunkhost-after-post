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

function cap_afteR_post_content() {
	if ( ! is_single() ) {
		return;
	}

	?>
	<h4 class="heading"><i class="fa fa-info"></i>About This Site</h4>
	<div style="border: 1px solid #eaeaea; padding: 15px 10px; margin-bottom: 15px;">
	<div style="float:left; margin-right: 15px; padding-top: 20px;"><img src="<?php echo CAP_PLUGIN_URL; ?>images/chunk-host-logo.png" /></div>
	<div style="padding-left: 90px;">
	This Site is Hosted on a <strong><a href="https://kungfugrep.com/ChunkHost">ChunkHost VPS</a></strong>. I've been using ChunkHost for the last 4 years as my Go-To VPS provider.
	Their killer customer service, unbeatable pricing, and rock solid hardware is what keeps me here.
	<strong><em><a href="https://kungfugrep.com/ChunkHost">Get Started Now</a></em></strong> with their most popular plan at <strong>$9/month</strong>.
	</div>
	</div>
	<?php
}
add_action( 'hueman_after_author_bio', 'cap_after_post_content', 99 );
