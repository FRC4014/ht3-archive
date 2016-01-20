<?php
/*
Plugin Name: HT^3 Special Pages
Plugin URI:  https://github.com/FRC4014/ht3-archive
Description: Replaces certain pages with a code!  Cool.
Version:     2.0
Author:      Lucas LeVieux
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function technicians_special($the_content) {
	if (get_the_title() == "Archive")
		return file_get_contents("archive.php");
	}
	
add_filter( 'the_content', 'technicians_special' );
?>