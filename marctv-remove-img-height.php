<?php
/*
  Plugin Name: MarcTV Remove image height attribute
  Plugin URI: http://www.marctv.de/blog/marctv-wordpress-plugins/
  Description: Removes the height attribute from all images in the content.
  Author: MarcDK
  Version: 1.2
  Author URI: http://marctv.de
  License: GPL2
 */

function remove_height_attribute($html) {
  $html = preg_replace('#(<img.+?)height=(["\']?)\d*\2(.*?/?>)#i', '$1$3', $html );
  return $html;
}

add_filter('the_content', 'remove_height_attribute');




?>
