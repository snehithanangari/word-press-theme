<?php
/*
Plugin Name: Simple Notice Plugin
Description: Displays a custom notice on every page.
Version: 1.0
Author: Your Name
*/

function snp_display_notice() {
    echo '<div style="background: #fffae6; color: #333; padding: 10px; text-align: center;">
    📢 This is a custom notice from Simple Notice Plugin.
    </div>';
}
add_action('wp_footer', 'snp_display_notice');
