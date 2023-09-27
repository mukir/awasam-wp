<?php
/*
 * Plugin Name: AWASAM WP
 * Plugin URI: http://awasam.com
 * Description: Add custom content to post and/or page (top/bottom). You may use text, HTML, Shortcodes and JavaScript. Simple, but work...
 * Author: Awasam
 * Author URI: http://awasam.com
 * Version: 2.6.6
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


/* Copyright awasam (email: ezekiel@awasam.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

add_shortcode('awa_cta', 'shortcode_awa_cta');

function shortcode_awa_cta($atts) {
	// Set default values for attributes
	$atts = shortcode_atts(array(
		'title' => '',         // The title of the custom essay
		'price' => '',         // The price of the custom essay
		'button_text' => 'Learn More',    // Default button text if not provided
		'button_link' => '#',  // Default button link if not provided
	), $atts);

	$html = '



	  																<style>
	  																.awasam-promo3 {
	  																	background-color: #F5F9FF;
	  																	color: #000000;
	  																	text-align: center;
	  																	padding: 20px;
	  																	border-radius: 10px;
	  																}

	  																.button {
	  																	background-color: #4CAF50;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.button-whatsapp {
	  																	background-color: #41D07D;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.awasam-alert {
	  																	color: red;
	  																}

	  																</style>
	  																<main>
	  																<div class="awasam-promo3">
	  																<h3>'.$atts['title'].'</h3>
	  																<a style="color: white;" href="https://api.whatsapp.com/send/?phone='.$phone.'&text=Hi&app_absent=0" class="button-whatsapp">
	  																<img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/WhatsApp_icon.png" width="20">
	  																'. get_option('button_whatsapp') .'</a>
	  																<a href='. get_option('button_link') .' class="button"><img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/205-2057855_essay-icon.png" width="20">
	  																'. get_option('button_text') .'</a>
	  																</div>

	  																</main>
	';

	return $html;
}


add_shortcode('awa_cta1', 'shortcode_awa_cta1');

function shortcode_awa_cta1($atts) {
	// Set default values for attributes
	$atts = shortcode_atts(array(
		'title' => '',         // The title of the custom essay
		'price' => '',         // The price of the custom essay
		'button_text' => 'Learn More',    // Default button text if not provided
		'button_link' => '#',  // Default button link if not provided
	), $atts);

	$html = '
	<style>
		.awasam-promo10 {
			background-color: #ffcc00;
			color: #ffffff;
			padding: 20px;
			margin: 20px;
			text-align: center;
			border-radius: 10px;
			box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
			overflow: hidden; /* To hide overflowing elements during animations */
			position: relative; /* For absolute positioning */
			cursor: pointer; /* Change cursor on hover to indicate interactivity */
			transition: transform 0.3s ease; /* Add a smooth transition on hover */
			z-index: 1; /* Bring the box above the bubbles */
		}

		.awasam-promo10 p {
			font-size: 19px;
			margin-bottom: 10px;
			opacity: 0; /* Hidden by default, will be animated in */
			/* Animation to fade in the elements on page load */
			animation: fade-in 1s ease-out forwards;
		}

		@keyframes fade-in {
			to {
				opacity: 1;
			}
		}

		.awasam-promo10 .price {
			font-size: 36px;
			font-weight: bold;
		}

		.awasam-promo10 a.button {
			display: inline-block;
			background-color: #367FD3;
			color: #ffffff;
			padding: 10px 20px;
			text-decoration: none;
			border-radius: 5px;
			transform: scale(0.8); /* Slightly scaled down to start with */
			transition: transform 0.3s ease; /* Add a smooth transition on hover */
		}

		.awasam-promo10:hover .animated-element {
			opacity: 1;
		}

		.awasam-promo10:hover a.button {
			transform: scale(1); /* Scale back to original size on hover */
		}

		/* Confetti Animation and JavaScript as before ... */
		/* ... */

		/* Animated Bubbles */
		.bubbles-container {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			pointer-events: none;
			overflow: hidden;
		}

		.bubble {
			position: absolute;
			width: 20px;
			height: 20px;
			border-radius: 50%;
			background-color: rgba(255, 255, 255, 0.4);
			animation: float 5s infinite;
		}

		.bubble:nth-child(1) {
			top: 10%;
			left: 20%;
			animation-delay: 0s;
		}

		.bubble:nth-child(2) {
			top: 50%;
			left: 60%;
			animation-delay: 2s;
		}

		.bubble:nth-child(3) {
			top: 90%;
			left: 30%;
			animation-delay: 1s;
		}

		@keyframes float {
			from {
				transform: translateY(0);
				opacity: 1;
			}
			to {
				transform: translateY(-1000px);
				opacity: 0;
			}
		}
	</style>

	<main>
		<div class="awasam-promo10" onclick="throwConfetti()">
			<p class="animated-element">'.$atts['title'].'</p>
			<p class="price animated-element">'.$atts['price'].'</p>
			<a href="'.$atts['button_link'].'" class="button animated-element">'.$atts['button_text'].'</a>
		</div>
		<div class="bubbles-container">
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
		</div>
	</main>

	<script>
		function throwConfetti() {
			const confettiElements = document.querySelectorAll(".confetti");
			confettiElements.forEach((confetti) => {
				confetti.style.opacity = 1;
				confetti.style.left = Math.random() * 100 + "%";
				confetti.style.animationDelay = Math.random() + "s";
			});
		}
	</script>
	';

	return $html;
}







	// CTA button shortcode
add_shortcode('awa_widget1', 'shortcode_awa_widget');

function shortcode_awa_widget() {
   // Fetch the products.
	$site = $_SERVER['HTTP_HOST'];
	$html = '
	<style>
	.awasam-promo10 {
		background-color: #F0F6FD;
		color: #367FD3;
		padding: 10px;
		margin: 20px;
	}
	</style>

	<main>
	<div class="awasam-promo10">
	<h2>Why would you need help with your Assignment?</h2>
	<p>Do not struggle with your Assignment when we are here to help. We are aware that every student aims at getting better grades. This prompts most of them to look for help on online platforms like ours. However, different students seek help with their assignments for different reasons. We have listed some of them below.
	</p>

	<ul>
	<li>To save time</li>
	<li>Desire to achieve excellent grades</li>
	<li>Fear of failure</li>
	<li>When you want to work with professionals</li>
	<li>For high-quality and well-researched assignments</li>
	<li>When the assignment is beyond your capability</li>
	<li>When you do not have time to work on the assignment</li>
	</ul>

	<h3>Need Our Services?</h3>
	<p>
	For the rates we charge, our services are the finest you can get. At&nbsp;<a href="https://'.$site.'/"><strong>'.$site.'</strong></a>, we do way more than just coaching students to become better academic writers. We also encourage and motivate every ambitious student so they can stay the course throughout their program. We have the competence, experience, processes, people, and systems to help you turn your dreams into reality. Head over to the order form right now. Submit your instructions. We&nbsp;<strong>GUARANTEE</strong>&nbsp;that you’ll get a model paper that oozes brilliance.</p>
	<a href='. get_option('button_link') .' class="button">Get Professional Assignment Help Now</a>
	</div>
	</main>    


	';



	return $html;
}


	// CTA button shortcode
add_shortcode('awa_how_it_works', 'shortcode_how_it_works');

function shortcode_how_it_works() {
   // Fetch the products.
	$site = $_SERVER['HTTP_HOST'];
	$html = '

   <style>
  .awasam-promo5 {
    background-color: #F0F6FD;
    text-align: center;
    color: #367FD3;
    padding: 10px;
  }

  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
  }

  .button2 {
    background-color: #001040;
    border: none;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
  }
</style>
	<main>


  <div class="awasam-promo5">

<aside id="text-13" class="widget widget_text">

<div class="textwidget">
  
	<h3>
		How to order a paper
	</h3>
	<hr>

<strong>1. Fill in the order form</strong>
<br>
Issue instructions for your paper in the order form. Include a discount code if you have one. Your account will be created automatically.

</div>
</aside>
<aside id="text-14" class="widget widget_text">
<div class="textwidget">

<strong>2. Payment Procedure</strong>
<br>
Your payment is processed by a secure system. We accept MasterCard, Visa, Amex and Discover. No information is shared with 3rd parties.

</div>
</aside>
<aside id="text-16" class="widget widget_text">
<div class="textwidget">

<strong>3. The Writing Process</strong>
<br>
Clarify all the questions with customer support representatives and upload all the necessary files for the writer to use.

</div>
</aside>
<aside id="text-12" class="widget widget_text">
<div class="textwidget">
<strong>4. Download Your Paper</strong>
<br>
Check your paper. If it meets your requirements, approve and download it. If changes are needed, request a revision.

</div>
</aside>
		
<a href="/order" class="button">Order Custom Paper Now </a>
 </div>                 
	</main>    


	';



	return $html;
}




	// CTA button shortcode
add_shortcode('start_chat', 'shortcode_start_chat');

function shortcode_start_chat() {
   // Fetch the products.
$fileName = dirname(__FILE__) ."/start_chat.txt";
	/*	we want to change `the_content` of posts, not pages
		and the text file must exist for this to work */

		if(file_exists( $fileName )){

		/*	open the text file and read its contents */

			$theFile = fopen( $fileName, "r");
			$msg = fread( $theFile, filesize( $fileName ));
			fclose( $theFile );
			
			/* detect the old message in code to try and eradicate my name and #
			showing up on strange websites that are run by lazy people */
			
			if( $msg == "<p>Call for an estimate 724-498-1551<br><a href=\"mailto:corey.salzano@gmail.com\">corey.salzano@gmail.com</a></p>" ){
				$msg = "<p>Thank you for installing the Bottom of every post WordPress plugin. To find out how to change or remove this message, read <a href=\"http://wordpress.org/extend/plugins/bottom-of-every-post/installation/\">the instructions</a>.</p>";
			}

		/*	append the text file contents to the end of `the_content` */
			return stripslashes( $msg );
		} else{

		/*	if `the_content` belongs to a page or our file is missing
			the result of this filter is no change to `the_content` */

			return $content = '';
		}
}


	// CTA button shortcode
add_shortcode('awa_button', 'shortcode_awa_button');

function shortcode_awa_button() {
   // Fetch the products.
	$html = '
	<style>
	.awasam-promo5 {
		background-color: #F0F6FD;
		text-align: center;
		color: #367FD3;
		padding: 10px;
		margin: 20px;
	}

	.button {
		background-color: #4CAF50;
		border: none;
		color: white;
		padding: 10px 20px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 10px;
	}

	.button2 {
		background-color: #001040;
		border: none;
		color: #fff;
		padding: 10px 20px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 4px 2px;
		cursor: pointer;
		border-radius: 10px;
	}
	</style>

	<div class="awasam-promo5">
	<h2 style="color: #0D014D;">'.get_option('awa_button').'</h2>
	<a href='. get_option('button_link') .' class="button">Get Started Now</a>
	</div>   





	';



	return $html;
}

function awasamcalc1($atts)
{
	ob_start();
	include plugin_dir_path(__FILE__) . 'calculator1.php';
	$content = ob_get_clean();
    //print $output; // debug
	return $content;

}
add_shortcode('awasamcalc1', 'awasamcalc1');


//get all reviews

function reviews($atts)
{
	ob_start();
	include plugin_dir_path(__FILE__) . 'reviews.php';
	$content = ob_get_clean();
    //print $output; // debug
	return $content;

}

add_shortcode('reviews', 'reviews');

function writers_slider($atts) {
	ob_start();
	include plugin_dir_path(__FILE__) . 'writers.php';
	$content = ob_get_clean();
    //print $output; // debug
	return $content;
}

add_shortcode('writers', 'writers_slider');


function writers_slider2($atts) {
	ob_start();
	include plugin_dir_path(__FILE__) . 'writers2.php';
	$content = ob_get_clean();
    //print $output; // debug
	return $content;
}

add_shortcode('writers2', 'writers_slider2');







if ( ! defined( 'ABSPATH' ) ) exit;


if ( !function_exists("awasam_wp_add_custom_content_to_bottom_of_post") ) {
	
	
	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	
	if ( ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] ) ) && ( !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] ) ) && is_numeric( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] ) ) {

		$function_custom_priotyty = ( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] );

	} else {
		$function_custom_priotyty = '10';
	}
	

	function awasam_wp_add_custom_content_to_bottom_of_post($content) {

		$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
		
		// Exclude some page(s)
		$page_id_exclude_array = array();
		//$page_id_exclude_array = explode(',', $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1']);

		// Exclude some post(s)
		//$post_id_exclude_top_array = array();
		//$post_id_exclude_bottom_array = array();
		//$post_id_exclude_top_array = explode(',', $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1']);
		//$post_id_exclude_bottom_array = explode(',', $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1']);
		
		
		
		#if ( is_single()/post || is_singular()/Post&Page + && is_main_query()/main post query
		if ( ( is_single() && is_main_query() ) || ( ( ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2'] ) ) && ( !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2'] ) ) ) && ( is_singular() && is_main_query() ) ) && ( ( empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1'] ) ) || ( !is_page( $page_id_exclude_array ) ) ) ) {
			
			/* Top contet */
			if ( ( ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1'] ) ) && ( !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1'] ) ) && ( !isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1'] ) ) && ( empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1'] ) ) ) && ( !is_single( $post_id_exclude_top_array ) ) ) {

				$content = '<!-- AWASAM WP: Add custom content to top of post/page --><div id="awasam-wp-acctp-top">' . stripslashes( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1'] ) . '</div><!-- /AWASAM WP: Add custom content to top of post/page --><!-- AWASAM WP: Add custom content to bottom of post/page: Standard Content START --><div id="awasam-wp-acctp-original-content">' . $content;

			} else {
				$content = '' . $content;
			}
			
			/* Bottom contet */
			if ( ( ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1'] ) ) && ( !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1'] ) ) && ( !isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1'] ) ) && ( empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1'] ) ) ) && ( !is_single( $post_id_exclude_bottom_array ) ) ) {

				$content = $content . '<!-- AWASAM WP: Add custom content to bottom of post/page: Standard Content START --></div><!-- AWASAM WP: Add custom content to bottom of post/page --><div id="awasam-wp-acctp-bottom">' . stripslashes( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1'] ) . '</div><!-- /AWASAM WP: Add custom content to bottom of post/page -->';

			} else {
				$content = $content . '';
			}
			


			return $content;

		} else { return $content; } # Page etc.
	}

	add_filter( 'the_content', 'awasam_wp_add_custom_content_to_bottom_of_post', $function_custom_priotyty );
}

/* ----- WP Admin ----- */

add_action( 'admin_menu', 'awasam_wp_add_custom_content_to_bottom_of_post_add_admin_menu' );
add_action( 'admin_init', 'awasam_wp_add_custom_content_to_bottom_of_post_settings_init' );

# Menu
function awasam_wp_add_custom_content_to_bottom_of_post_add_admin_menu() { 

	add_options_page( 'AWASAM WP', 'AWASAM WP', 'manage_options', 'awasam_wp_add_custom_content_to_bottom_of_post', 'awasam_wp_add_custom_content_to_bottom_of_post_options_page' );

}

# Prepare
function awasam_wp_add_custom_content_to_bottom_of_post_settings_init() { 

	register_setting( 'AWASAM WP: Add custom content (pluginPage)', 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );

	# Define section 2 + header h2 (info)
	add_settings_section(
		'awasam_wp_add_custom_content_to_bottom_of_post_section2', 
		__( 'Top content settings:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback2', 
		'AWASAM WP: Add custom content (pluginPage)'
	);
	
	# Define section 1 + header h2 (info)
	add_settings_section(
		'awasam_wp_add_custom_content_to_bottom_of_post_section1', 
		__( 'Bottom content settings:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback1', 
		'AWASAM WP: Add custom content (pluginPage)'
	);
	
	# Define section 3 + header h2 (info)
	add_settings_section(
		'awasam_wp_add_custom_content_to_bottom_of_post_section3', 
		__( 'Other settings:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback3', 
		'AWASAM WP: Add custom content (pluginPage)'
	);
	
	# Disable content (top)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1', 
		__( 'Don\'t display content (top):', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2' 
	);
	
	# Define content field (top)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1', 
		__( 'Content (top):', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2' 
	);
	
	# Add post exclude (top)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1', 
		__( 'Don\'t show at post:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section2' 
	);
	

	# Disable content (bottom)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1', 
		__( 'Don\'t display content (bottom):', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1' 
	);
	
	# Define content field (bottom)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1', 
		__( 'Content (bottom):', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1' 
	);
	
	# Add post exclude (bottom)
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1', 
		__( 'Don\'t show at post:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section1' 
	);
	

	# Add to page
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2', 
		__( 'Add to pages:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3' 
	);
	
	# Add to page exclude
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1', 
		__( 'Don\'t show at pages:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3' 
	);
	
	# Function priority
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2', 
		__( 'Set custom priority:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3' 
	);
	
	# Clear at uninstall
	add_settings_field( 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1', 
		__( 'Clear plugin data:', 'awasam_wp_add_custom_content_to_bottom_of_post' ), 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1_render', 
		'AWASAM WP: Add custom content (pluginPage)', 
		'awasam_wp_add_custom_content_to_bottom_of_post_section3' 
	);

}	

# Make disable (top)
function awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='checkbox' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1]' <?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1'] ) ) { checked( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_checkbox_field_1'], 1 ); } ?> value='1'>
	
	<?php
	
	echo __( 'If chcecked - don\'t show content (top)', 'awasam_wp_add_custom_content_to_bottom_of_post' );

}	

# Make disable (bottom)
function awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='checkbox' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1]' <?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1'] ) ) { checked( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_checkbox_field_1'], 1 ); } ?> value='1'>
	
	<?php
	
	echo __( 'If chcecked - don\'t show content (bottom)', 'awasam_wp_add_custom_content_to_bottom_of_post' );

}	



# Make content field (top)
function awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	
	<textarea cols='' rows='21' style='width:100%' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1]'><?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1'] )) { echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_textarea_field_1']; } else { echo ""; } ?> </textarea>
	
	<?php
	echo '<br /><br />';
	echo __( 'You may use text, HTML, Shortcodes and JavaScript. Don\'t use the \\ ("\\") character. If you must, use double \\\ instead of \\.', 'awasam_wp_add_custom_content_to_bottom_of_post' );
}

# Make content field (bottom)
function awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	
	<textarea cols='' rows='21' style='width:100%' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1]'><?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1'] )) { echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_textarea_field_1']; } else { echo ""; } ?></textarea>
	
	<?php
	echo '<br /><br />';
	echo __( 'You may use text, HTML, Shortcodes and JavaScript. Don\'t use the \\ ("\\") character. If you must, use double \\\ instead of \\.', 'awasam_wp_add_custom_content_to_bottom_of_post' );
}


# Add to post exclude (top)
function awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='text' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1]' value='<?php 
	
	if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1'] )) {	
		echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section2_text_field_1']; 
	} else { echo __( '', 'awasam_wp_add_custom_content_to_bottom_of_post' ); }
	
	?>' cols='' style='width:100%' >
	<?php
	
	echo __( 'Post(s) ID, comma separated. Only numbers and commas, without spaces!' );

}

# Add to post exclude (bottom)
function awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='text' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1]' value='<?php 
	
	if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1'] )) {	
		echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section1_text_field_1']; 
	} else { echo __( '', 'awasam_wp_add_custom_content_to_bottom_of_post' ); }
	
	?>' cols='' style='width:100%' >
	<?php
	
	echo __( 'Post(s) ID, comma separated. Only numbers and commas, without spaces!' );

}




# Add to page
function awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='checkbox' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2]' <?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2'] ) ) { checked( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_2'], 1 ); } ?> value='1'>
	
	<?php
	
	echo __( 'Add custom content to pages', 'awasam_wp_add_custom_content_to_bottom_of_post' );

}

# Add to page exclude
function awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='text' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1]' value='<?php 
	
	if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1'] )) {	
		echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_1']; 
	} else { echo __( '', 'awasam_wp_add_custom_content_to_bottom_of_post' ); }
	
	?>' cols='' style='width:100%' >
	<?php
	
	echo __( 'Page(s) ID, comma separated (if active "add to pages" option). Only numbers and commas, without spaces!' );

}



# Function priority
function awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='text' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2]' value='<?php 
	
	if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] ) && !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2'] )) {	
		echo $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_text_field_2']; 
	} else { echo __( '', 'awasam_wp_add_custom_content_to_bottom_of_post' ); }
	
	?>' cols='' style='width:100%' >
	<?php
	
	echo __( 'Here You can set own priority for the content modifying function. It\'s useful when You use short codes or page builders. E.g. 99, 999, 9999, 99999, 999999... Only digits!' );

}





# Make clear data checkbox
function awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1_render() { 

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );
	?>
	<input type='checkbox' name='awasam_wp_add_custom_content_to_bottom_of_post_settings[awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1]' <?php if ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1'] ) ) { checked( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1'], 1 ); } ?> value='1'>
	
	<?php
	
	echo __( 'Remove all plugin data when uninstall this plugin', 'awasam_wp_add_custom_content_to_bottom_of_post' );

}


# Section 1 text/description
function awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback1() { 

	echo __( 'Add custom content to bottom of post. You may use text, HTML, Shortcodes and JavaScript. Simple, but work...', 'awasam_wp_add_custom_content_to_bottom_of_post' );
	
}

# Section 2 text/description
function awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback2() { 

	echo __( 'Add custom content to top of post. You may use text, HTML, Shortcodes and JavaScript. Simple, but work...', 'awasam_wp_add_custom_content_to_bottom_of_post' );
	
}

# Section 3 text/description
function awasam_wp_add_custom_content_to_bottom_of_post_settings_section_callback3() { 

	echo __( 'Other plugin settings', 'awasam_wp_add_custom_content_to_bottom_of_post' );
	
}


# Save
function awasam_wp_add_custom_content_to_bottom_of_post_options_page() { 

	?>
	<form action='options.php' method='post'>
		
		<h2>AWASAM WP</h2>
		
		<?php

		settings_fields( 'AWASAM WP: Add custom content (pluginPage)' );
		do_settings_sections( 'AWASAM WP: Add custom content (pluginPage)' );
		submit_button();
		?>
		
	</form>
	<?php
	
	echo __( 'Remember CLEAR CACHE after change settings/content!', 'awasam_wp_add_custom_content_to_bottom_of_post' );
	
	echo '<br /><br />';
	
	echo '<a href="https://awaspay.com/cview-invoice/in-1660904963ieH2wc" target="_blank">' . __( 'Like my plugin? Buy a cup of tea :-)', 'awasam_wp_antyspam' ) . '</a>';	
	
}

# Uninstall plugin

register_uninstall_hook( __FILE__, 'awasam_wp_add_custom_content_to_bottom_of_post_uninstall' );
#register_deactivation_hook( __FILE__, 'awasam_wp_add_custom_content_to_bottom_of_post_uninstall' );

function awasam_wp_add_custom_content_to_bottom_of_post_uninstall() {

	$options = get_option( 'awasam_wp_add_custom_content_to_bottom_of_post_settings' );

	if ( ( isset( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1'] ) ) && ( !empty( $options['awasam_wp_add_custom_content_to_bottom_of_post_section3_checkbox_field_1'] ) ) ) {
		
		# Clear at uninstall
		$option_to_delete = 'awasam_wp_add_custom_content_to_bottom_of_post_settings';
		delete_option( $option_to_delete );
	}
	
}


class CtaWidgets {
	private static $initiated = false;

	public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
	}

	  /**
	   * Initializes WordPress hooks
	   */
	  public static function init_hooks() {
	  	self::$initiated = true;

		  //Register the sitemap creator to wordpress...
	  	add_action('admin_menu', array('CtaWidgets', 'registerAdminPage'));

	  	add_action( 'wp_head', array( 'CtaWidgets', 'add_css_tags' ) , 10 );
	  	add_filter( 'the_content', array( 'CtaWidgets', 'insert_posts_cta' ) );
	  }  

	  public static function registerAdminPage() {
	  	add_options_page(
	  		__('Awasam Widgets', 'ctawidgets'),
	  		__('Awasam Widgets', 'ctawidgets'), 
	  		'administrator', 
	  		'ctawidgets', 
	  		array('CtaWidgets', 'callHtmlShowOptionsPage')
	  	);
	  } 

	  public static function ActivatePlugin() {
	  	add_option('ctawidgets_cta', 'Just from $13/Page');
	  	add_option('ctawidgets_cta2', 'We have worked on a similar problem. If you need help click order now button and submit your assignment instructions.');
	  	add_option('ctawidgets_cta1', 'Get Your Custom Essay Written From Scratch');

	  	add_option('ctawidgets_buttom_head', 'Needs help with similar assignment?');
	  	add_option('ctawidgets_buttom_sub', 'We are available 24x7 to deliver the best services and assignment ready within 3-4 hours? Order a custom-written, plagiarism-free paper');

	  	add_option('ctawidgets_pop_head', 'Do you have an upcoming essay or assignment due? ');
	  	add_option('ctawidgets_pop_sub', 'All of our assignments are originally produced, unique, and free of plagiarism.');

	  	add_option('button_link', '/order');
	  	add_option('whatsapp_phone', '12898036873');
	  	add_option('use_awasam', 'no');
	  	add_option('use_ctap', 'no');
	  	add_option('use_popup', 'no');
	  	add_option('use_ctab', 'no');
	  	add_option('pop_delay', '15');
	  	add_option('use_notification', 'no');
	  	add_option('awa_button', 'Get your project done perfectly');
	  	add_option('button_text', 'Order Paper Now');
	  	add_option('button_whatsapp', 'Get Answer Over WhatsApp');
	  }

	  /**
	   * Returns a link pointing back to the plugin page in WordPress
	   *
	   * @since 3.0
	   * @return string The full url
	   */
	  public static function GetBackLink($extra = '') {
	  	global $wp_version;
	  	$url = admin_url("options-general.php?page=ctawidgets" . $extra);
	  	return $url;
	  }

	  public static function callHtmlShowOptionsPage() {
	  	if(isset($_POST['ctawidgets_update'])) {
	  		check_admin_referer('ctawidgets');

	  		if( isset($_POST['ctawidgets_cta']) ) {
	  			update_option( 'ctawidgets_cta',  $_POST['ctawidgets_cta'] );
	  		}

	  		if( isset($_POST['ctawidgets_cta2']) ) {
	  			update_option( 'ctawidgets_cta2',  $_POST['ctawidgets_cta2'] );
	  		}

	  		if( isset($_POST['ctawidgets_cta1']) ) {
	  			update_option( 'ctawidgets_cta1',  $_POST['ctawidgets_cta1'] );
	  		}

	  		if( isset($_POST['ctawidgets_buttom_head']) ) {
	  			update_option( 'ctawidgets_buttom_head',  $_POST['ctawidgets_buttom_head'] );
	  		}

	  		if( isset($_POST['ctawidgets_buttom_sub']) ) {
	  			update_option( 'ctawidgets_buttom_sub',  $_POST['ctawidgets_buttom_sub'] );
	  		}


	  		if( isset($_POST['ctawidgets_pop_head']) ) {
	  			update_option( 'ctawidgets_pop_head',  $_POST['ctawidgets_pop_head'] );
	  		}

	  		if( isset($_POST['ctawidgets_pop_sub']) ) {
	  			update_option( 'ctawidgets_pop_sub',  $_POST['ctawidgets_pop_sub'] );
	  		}

	  		if( isset($_POST['button_link']) ) {
	  			update_option( 'button_link',  $_POST['button_link'] );
	  		}

	  		if( isset($_POST['whatsapp_phone']) ) {
	  			update_option( 'whatsapp_phone',  $_POST['whatsapp_phone'] );
	  		}

	  		if( isset($_POST['use_awasam']) ) {
	  			update_option( 'use_awasam',  $_POST['use_awasam'] );
	  		}

	  		if( isset($_POST['use_popup']) ) {
	  			update_option( 'use_popup',  $_POST['use_popup'] );
	  		}

	  		if( isset($_POST['use_ctap']) ) {
	  			update_option( 'use_ctap',  $_POST['use_ctap'] );
	  		}

	  		if( isset($_POST['use_ctab']) ) {
	  			update_option( 'use_ctab',  $_POST['use_ctab'] );
	  		}

	  		if( isset($_POST['pop_delay']) ) {
	  			update_option( 'pop_delay',  $_POST['pop_delay'] );
	  		}

	  		if( isset($_POST['use_notification']) ) {
	  			update_option( 'use_notification',  $_POST['use_notification'] );
	  		}

	  		if( isset($_POST['awa_button']) ) {
	  			update_option( 'awa_button',  $_POST['awa_button'] );
	  		}

	  		if( isset($_POST['button_text']) ) {
	  			update_option( 'button_text',  $_POST['button_text'] );
	  		}

	  		if( isset($_POST['button_whatsapp']) ) {
	  			update_option( 'button_whatsapp',  $_POST['button_whatsapp'] );
	  		}
	  	}

	  	?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">

	<div class="col-md-6 well">




	  	<h2>Awasam Widgets</h2>


	  	<form method="post" action="<?php echo self::GetBackLink(); ?>">
	  		<div>
	  			<div>
	  				<label for="ctawidgets_cta">Use Awasam Widget</label>
	  			</div>
	  			<select class="form-control" name="use_awasam">
	  				<option value="<?php echo get_option('use_awasam');  ?>"><?php echo get_option('use_awasam');  ?><option>
	  					<option value="yes">Yes<option>
	  						<option value="no">No<option>	
	  						</select>
	  					</div>
	  					<h3>Content at 2 paragraph</h3>

	  					<div>
	  						<div>
	  							<label for="ctawidgets_cta">Enable CTA at 2 paragraph</label>
	  						</div>
	  						<select class="form-control" name="use_ctap">
	  							<option value="<?php echo get_option('use_ctap');  ?>"><?php echo get_option('use_ctap');  ?><option>
	  								<option value="yes">Yes<option>
	  									<option value="no">No<option>	
	  									</select>
	  								</div>



	  								<div>
	  									<div>
	  										<label for="ctawidgets_cta">Call to action title</label>
	  									</div>
	  									<textarea class="form-control" type="text" id="ctawidgets_cta1" name="ctawidgets_cta1" ><?php echo get_option('ctawidgets_cta1');  ?></textarea>
	  								</div>

	  								<div>
	  									<div>
	  										<label for="ctawidgets_cta">Call to action text</label>
	  									</div>
	  									<textarea class="form-control" type="text" id="ctawidgets_cta2" name="ctawidgets_cta2" ><?php echo get_option('ctawidgets_cta2');  ?></textarea>
	  								</div>

	  								<div>
	  									<div>
	  										<label for="ctawidgets_cta">Price Text</label>
	  									</div>
	  									<input class="form-control" type="text" id="ctawidgets_cta" name="ctawidgets_cta" value="<?php echo get_option('ctawidgets_cta');  ?>" />
	  								</div>

	  								<hr>
	  								<h3>Content at buttom of every post</h3>

	  								<div>
	  									<div>
	  										<label for="ctawidgets_cta">Enable CTA at 2 paragraph</label>
	  									</div>
	  									<select class="form-control" name="use_ctab">
	  										<option value="<?php echo get_option('use_ctab');  ?>"><?php echo get_option('use_ctab');  ?><option>
	  											<option value="yes">Yes<option>
	  												<option value="no">No<option>	
	  												</select>
	  											</div>


	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">Heading</label>
	  												</div>
	  												<textarea type="text" class="form-control" id="ctawidgets_buttom_head" name="ctawidgets_buttom_head" ><?php echo get_option('ctawidgets_buttom_head');  ?></textarea>
	  											</div>

	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">Sub heading</label>
	  												</div>
	  												<textarea type="text" class="form-control" id="ctawidgets_buttom_sub" name="ctawidgets_buttom_sub" ><?php echo get_option('ctawidgets_buttom_sub');  ?></textarea>
	  											</div>

	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">Awa button content</label>
	  												</div>
	  												<textarea type="text"  class="form-control" id="awa_button" name="awa_button" ><?php echo get_option('awa_button');  ?></textarea>
	  											</div>


	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">Button link</label>
	  												</div>
	  												<input type="text" class="form-control" id="button_link" name="button_link" value="<?php echo get_option('button_link');  ?>">
	  											</div>

	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">CTA Button Text</label>
	  												</div>
	  												<input type="text" class="form-control" id="button_text" name="button_text" value="<?php echo get_option('button_text');  ?>">
	  											</div>

	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">WhatsApp Button Text</label>
	  												</div>
	  												<input type="text" class="form-control" id="button_link" name="button_whatsapp" value="<?php echo get_option('button_whatsapp');  ?>">
	  											</div>


	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">WhatsApp Number</label>
	  												</div>
	  												<input type="text" class="form-control" id="whatsapp_phone" name="whatsapp_phone" value="<?php echo get_option('whatsapp_phone');  ?>">
	  											</div>

	  											<h3>Pop up content</h3>

	  											<div>
	  												<div>
	  													<label for="ctawidgets_cta">Enable Popup </label>
	  												</div>
	  												<select class="form-control" name="use_popup">
	  													<option value="<?php echo get_option('use_popup');  ?>"><?php echo get_option('use_popup');  ?><option>
	  														<option value="yes">Yes<option>
	  															<option value="no">No<option>	
	  															</select>
	  														</div>

	  														<div>
	  															<div>
	  																<label for="ctawidgets_cta">Heading</label>
	  															</div>
	  															<textarea type="text" class="form-control" id="ctawidgets_pop_head" name="ctawidgets_pop_head" ><?php echo get_option('ctawidgets_pop_head');  ?></textarea>
	  														</div>

	  														<div>
	  															<div>
	  																<label for="ctawidgets_cta">Sub heading</label>
	  															</div>
	  															<textarea type="text" class="form-control" id="ctawidgets_pop_sub" name="ctawidgets_pop_sub" ><?php echo get_option('ctawidgets_pop_sub');  ?></textarea>
	  														</div>

	  														<div>
	  															<div>
	  																<label for="ctawidgets_cta">Load after how many seconds</label>
	  															</div>
	  															<input type="text" class="form-control" id="ctawidgets_pop_sub" name="pop_delay"  value="<?php echo get_option('pop_delay');  ?>">
	  														</div>

	  														<div>
	  															<div>
	  																<label for="ctawidgets_cta">Enable notification </label>
	  															</div>
	  															<select class="form-control" name="use_notification">
	  																<option value="<?php echo get_option('use_notification');  ?>"><?php echo get_option('use_notification');  ?><option>
	  																	<option value="yes">Yes<option>
	  																		<option value="no">No<option>	
	  																		</select>
	  																	</div>

	  																	<div>
	  																		<p class="submit">
	  																			<?php wp_nonce_field('ctawidgets') ?>
	  																			<input type="submit" class="button-primary" name="ctawidgets_update" value="Update options" />
	  																		</p>
	  																	</div>
	  																</form>
			
		</div>

		<div class="col-md-6 well">
			<h3>Awasam Shortcode</h3>

			<p>
				[awa_button]<br><br>
				[awa_cta title="Dynamic Title"  button_text="Order Now" button_link="/order"]<br><br>
				[awa_widget1]<br><br>
				[start_chat]<br><br>
				[awa_how_it_works]<br><br>
				[awasamcalc1] <br><br>
				[reviews ]<br><br>
				[writers]<br><br>

			</p>
				</div>



	</div>
</div>



	  																<?php
	  															}

	  															public static function insert_posts_cta( $content ) {
	  																$ads = array(
	  																	2 => self::add_cta()
	  																);

	  																if ( is_single() && ! is_admin() ) {
	  																	return self::insert_cta( $ads, $content );
	  																}

	  																return $content;
	  															}

	  															public static function insert_cta( $ads, $content ) {
	  																if ( ! is_array( $ads ) ) {
	  																	return $content;
	  																}

	  																$closing_p = '</p>';
	  																$paragraphs = explode( $closing_p, $content );

	  																foreach ($paragraphs as $index => $paragraph) {
	  																	if ( trim( $paragraph ) ) {
	  																		$paragraphs[$index] .= $closing_p;
	  																	}

	  																	$n = $index + 1;
	  																	if ( isset( $ads[ $n ] ) ) {
	  																		$paragraphs[$index] .= $ads[ $n ];
	  																	}
	  																}

	  																return implode( '', $paragraphs );
	  															}

	  															public static function add_cta() {
	  																$phone = get_option('whatsapp_phone');
	  																$cta = '
	  																<style>
	  																.awasam-promo3 {
	  																	background-color: #F5F9FF;
	  																	color: #000000;
	  																	text-align: center;
	  																	padding: 20px;
	  																	border-radius: 10px;
	  																}

	  																.button {
	  																	background-color: #4CAF50;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.button-whatsapp {
	  																	background-color: #41D07D;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.awasam-alert {
	  																	color: red;
	  																}

	  																</style>



	  																<main>
	  																<div class="awasam-promo3">
	  																<h2>'. get_option('ctawidgets_cta1') .' '.get_the_title().'</h2>
	  																<a style="color: white;" href="https://api.whatsapp.com/send/?phone='.$phone.'&text=Hi&app_absent=0" class="button-whatsapp">
	  																<img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/WhatsApp_icon.png" width="20">
	  																'. get_option('button_whatsapp') .'</a>
	  																<a href='. get_option('button_link') .' class="button"><img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/205-2057855_essay-icon.png" width="20">
	  																'. get_option('button_text') .'</a>
	  																<p style="font-size: 16px;">'. get_option('ctawidgets_cta') .'</p> 
	  																</div>

	  																</main>

	  																';

	  																if(get_option('use_awasam')=='no'){

	  																	$cta = "";

	  																}
	  																else{

	  																	$cta = $cta;

	  																}

	  																if(get_option('use_ctap')=='no'){

	  																	$cta = "";

	  																}
	  																else{

	  																	$cta = $cta;

	  																}




	  																return $cta;
	  															}

	  															public static function add_css_tags() {
	  																wp_enqueue_style('ctawidgets', plugins_url('/awasam-widgets/css/widget.css') );

	  																wp_register_style( 'ctawidgets-icon', false, array( 'ctawidgets' )  );
	  																wp_enqueue_style( 'ctawidgets-icon' );
	  																wp_add_inline_style('ctawidgets-icon',  '
	  																	@media screen and (min-width: 768px) {
	  																		.article__cta:before {
	  																			background-image: url(' . plugins_url('/awasam-widgets/icons/oval-archive.png') . ');
	  																			background-size: contain;
	  																			background-position: center right;
	  																			background-repeat: no-repeat
	  																		}
	  																	}
	  																	');
	  															}




	  														}


	  														if( !function_exists("bottom_of_every_post")){
	  															function bottom_of_every_post($content){



	  																$phone = get_option('whatsapp_phone');


	  																$cta = '  
	  																<style>
	  																.awasam-promo3 {
	  																	background-color: #F5F9FF;
	  																	color: #000000;
	  																	text-align: center;
	  																	padding: 20px;
	  																	border-radius: 10px;
	  																}

	  																.button {
	  																	background-color: #4CAF50;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.button-whatsapp {
	  																	background-color: #41D07D;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 5px;
	  																}

	  																.awasam-alert {
	  																	color: red;
	  																}

	  																</style>
	  																<main>
	  																<div class="awasam-promo3">
	  																<h2>'. get_option('ctawidgets_buttom_head') .'</h2>
	  																<p style="font-size: 16px;">'. get_option('ctawidgets_buttom_sub') .'</p>
	  																<a style="color: white;" href="https://api.whatsapp.com/send/?phone='.$phone.'&text=Hi&app_absent=0" class="button-whatsapp">
	  																<img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/WhatsApp_icon.png" width="20">
	  																'. get_option('button_whatsapp') .'</a>
	  																<a href='. get_option('button_link') .' class="button"><img src="https://powerpointpresentationhelp.com/wp-content/uploads/2022/03/205-2057855_essay-icon.png" width="20">
	  																'. get_option('button_text') .'</a>
	  																</div>

	  																</main>

	  																';

	  																$popcta = '  

	  																<link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
	  																<style>
	  																.awasam-promo {
	  																	background-color: #ffffff;
	  																	text-align: center;
	  																	padding: 10px;
	  																	color: #000000;
	  																}

	  																.button {
	  																	background-color: #4CAF50;
	  																	border: none;
	  																	color: white;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 10px;
	  																}

	  																.button-no {
	  																	background-color: #9ED5EA;
	  																	border: none;
	  																	color: #000000;
	  																	padding: 10px 20px;
	  																	text-align: center;
	  																	text-decoration: none;
	  																	display: inline-block;
	  																	font-size: 16px;
	  																	margin: 4px 2px;
	  																	cursor: pointer;
	  																	border-radius: 10px;
	  																}

	  																.awasam-alert {
	  																	color: red;
	  																}

	  																</style>







	  																<div  style="display: none" >
	  																<div id="awasam-promo" class="awasam-promo">
	  																<a href=""></a>
	  																<h2>'. get_option('ctawidgets_pop_head') .' </h2>

	  																<p>'. get_option('ctawidgets_pop_sub') .'</p>
	  																<a href='. get_option('button_link') .' class="button">If yes</a>
	  																<a href='. get_option('button_link') .' class="button-no">'. get_option('button_text') .'</a>


	  																</div>
	  																</div>


	  																<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	  																<script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
	  																<script>
	  																function openColorBox(){
	  																	$.colorbox({overlayClose: true,width:"60%", inline:true, href:"#awasam-promo"});

	  																}
	  																setTimeout(openColorBox, '. get_option('pop_delay')*1000 .');
	  																</script>





	  																';

	  																$notification = '
	  																<link rel="stylesheet" type="text/css" href="/wp-content/plugins/awasam-wp/css/style.css">
	  																<script src="/wp-content/plugins/awasam-wp/js/vendors.min.js"></script>
	  																<script src="/wp-content/plugins/awasam-wp/js/sales-notification.js"></script>

	  																';

	  																if(get_option('use_ctab')=='no'){

	  																	$cta = "";

	  																}
	  																else{

	  																	$cta = $cta;

	  																}

	  																if(get_option('use_notification')=='no'){

	  																	$cta = $cta;

	  																}
	  																else{

	  																	$cta = $cta.''.$notification;

	  																}



	  																if(get_option('use_popup')=='no'){

	  																	$cta = $cta;

	  																}
	  																else{

	  																	$cta = $cta.''.$popcta;

	  																}








	  																if(get_option('use_awasam')=='no'){

	  																	$cta = "";

	  																}
	  																else{

	  																	$cta = $cta;

	  																}

	  																if( !is_page( )){


	  																	return $content . stripslashes( $cta );

	  																} else{

		  /*  if `the_content` belongs to a page or our file is missing
		  the result of this filter is no change to `the_content` */

		  return $content;
		}

	}

	/*  add our filter function to the hook */

	add_filter('the_content', 'bottom_of_every_post');




	function theme_add_bootstrap() {
		wp_enqueue_style( 'bootstrap_css', "//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css");
	}

	add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

	function wpse_60056_load_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_register_script( 'jqueryexample','//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
		wp_enqueue_script('jqueryexample','//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'); 

	}    
	add_action('wp_enqueue_scripts', 'wpse_60056_load_scripts');




}

define( 'CTAWIDGETS_VERSION', '1.0.0' );
define( 'CTAWIDGETS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

add_action( 'init', array( 'CtaWidgets', 'init' ) );
register_activation_hook(__FILE__, array('CtaWidgets', 'ActivatePlugin'));


