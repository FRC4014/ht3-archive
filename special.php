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
		return file_get_contents(ABSPATH . "wp-content/plugins/ht3-special/archive.php");
	else if (get_the_title() == "Calendar")
		return file_get_contents(ABSPATH . "wp-content/plugins/ht3-special/calendar.php");
	else return $the_content;
	}
	
	
function add_calendar_scripts() {
	?>
	<link href='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.css' rel='stylesheet' />
	<link href='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='/wp-content/plugins/ht3-special/fullcalendar/lib/moment.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/lib/jquery.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/fullcalendar.min.js'></script>
	<script src='/wp-content/plugins/ht3-special/fullcalendar/gcal.js'></script>
	<?php
	}

	
add_action('wp_head', 'add_calendar_scripts');
add_filter('the_content', 'technicians_special');
?>