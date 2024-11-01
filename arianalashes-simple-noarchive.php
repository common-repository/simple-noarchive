<?php
/*
Plugin Name: Simple Noarchive
Description: Adds the noarchive tag to all URLs
Author: ArianaLashes
Author URI: https://arianalashes.com/
Version: 1.0

License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

*/

// Function to add noarchive to head-section
function addNoarchive_header() {
	echo "<meta name=\"robots\" content=\"noarchive\">\n";
}
	
// Run the function
add_action('wp_head','addNoarchive_header',1);
?>