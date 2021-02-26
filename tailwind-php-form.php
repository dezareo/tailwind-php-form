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
	//Create thank you page and change URL here
	$content .= '<form method="post" action="http://yourdomain.com/thank-you">';
	$content .= '<div class="relative mb-4">
	<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
	<input type="text" id="name" name="your_name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
  	</div>';

	$content .= '<div class="relative mb-4">
	<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
	<input type="email" id="email" name="your_email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
  	</div>';

	$content .= '<div class="relative mb-4">
	<label for="message" class="leading-7 text-sm text-gray-600">Message</label>
	<textarea id="message" name="your_comments" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
  	</div>';

	$content .= '<input type="submit" name="example_form_submit" value="Submit" class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg cursor-pointer">';
	$content .= '</form>';

	return $content;

}
add_shortcode('tailwind_php_form', 'tailwind_php_form');

function example_form_capture() {

	if( isset($_POST['example_form_submit']) ) {
		
		$name = sanitize_text_field($_POST['your_name']);
		$email = sanitize_text_field($_POST['your_email']);
		$comments = sanitize_textarea_field($_POST['your_comments']);

		//Change your email here and subject title
		$to = 'youremail@text.com';
		$subject = 'Test for submission';
		$message = "Name: " . $name . "\r\n" . "Email: " . $email . "\r\n". "Message: " . $comments;

		wp_mail($to, $subject, $message);

	}
}
add_action('wp_head', 'example_form_capture');
