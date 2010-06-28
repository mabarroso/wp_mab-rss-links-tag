<?php
/*
Plugin Name: MAB RSS Links Tags
Version: 1.0.0
Plugin URI: http://wordpress.mabarroso.com/plugin/mab-rss-links-tag/
Description: Allows you to add tags to URL in RSS
Author: mabarroso
Author URI: http://www.mabarroso.com/
*/

function embed_mabRSSLinksTag($content) {
#	return $content.'#rss';
	return $content.'?&utm_source=rss&utm_medium=feed&utm_campaign=Feed';
}

add_filter('the_permalink_rss', 'embed_mabRSSLinksTag');

?>