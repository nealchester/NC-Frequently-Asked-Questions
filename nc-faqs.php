<?php
/**
* Plugin Name: NC Frequently Asked Questions
* Plugin URI: https://github.com/nealchester/NC-Frequently-Asked-Questions
* Description: Creates a custom post type to store FAQs (Frequently Asked Questions) and call them with a special gutenberg block. It uses the <em>single.php</em> template file to display the content. Copy the <em>single.php</em> file and rename it <em>single-nc_faqs.php</em> to customize the FAQs display. You can do the same for the archive <em>archive-nc_faqs.php. <strong>NOTE:</strong> Usage of the blocks requires Advanced Custom Fields PRO</em>.
* Version: 1.0
* Author: Neal Chester
* Author URI: http://nealchester.com
* License: GNU General Public License v2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Register Custom Post Type
include('register-post-type.php');


if(function_exists('get_field')) {

  // Register Block
  include('block.php');

  // Block Fields
  include('fields.php');

  // Load CSS and JS Front and back end 
  function nc_faqs_css_js(){
    wp_enqueue_style('nc-faqs-css', plugin_dir_url( __FILE__ ).'nc-faqs.css', null, null, null);
    wp_enqueue_script('nc-faqs-js', plugin_dir_url( __FILE__ ).'nc-faqs.js', array('jquery'), '1', true);
  }
  add_action('enqueue_block_assets', 'nc_faqs_css_js');

}


?>