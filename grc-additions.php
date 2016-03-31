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

function emma_signup_form (){
	return '<link href="http://grcmechanical.com/wp-content/uploads/signup.med.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://app.e2ma.net/app2/audience/tts_signup/1770361/15166d5c89154c879fb5d866fa9708d7/43689/?v=a"></script><div id="load_check" class="signup_form_message" >This form needs Javascript to display, which your browser doesn\'t support. <a href="https://app.e2ma.net/app2/audience/signup/1770361/43689/?v=a"> Sign up here</a> instead </div><script type="text/javascript">signupFormObj.drawForm();</script>';}
		
		add_shortcode ('emma_form', 'emma_signup_form');
