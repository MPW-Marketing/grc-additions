<?php
/*
Plugin Name: GRC Additions
Description: additional features for GRC website
Version: 0.1.0
Author: 
Text Domain: 
*/

function add_clear () {
return '<div style="clear:both;"></div>';
}
add_shortcode ('clear', 'add_clear');
