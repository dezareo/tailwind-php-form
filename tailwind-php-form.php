<?php
/**
 * Plugin Name:       Tailwind PHP Form
 * Plugin URI:        https://dezareo.me
 * Description:       WordPress form plugin styled by Tailwind CSS Framework
 * Version:           1.0.0
 * Author:            Dragan Zaric
 * Author URI:        https://dezareo.me
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tailwind-php-form
 **/

function tailwind_php_form() {

	$content = '';
	$content .= 'Hello World';

	return $content;

}
add_shortcode('example_form', 'tailwind_php_form');