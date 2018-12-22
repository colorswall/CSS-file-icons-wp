<?php
/*
Plugin Name: CSS File Icons WP
Plugin URI: https://github.com/colorswall/CSS-file-icons-wp
Description: CSS File Icons WP is an Wordpress Plugin for "Pure CSS file" lib
Version: 0.1.0
Author: colorswall
Author URI: http://colorswall.com
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

define( 'CFI_VERSION', '0.1.0' );
define( 'CFI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CFI_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// Plugin init
require_once( CFI_PLUGIN_DIR . 'lib/functions.php' );
require_once( CFI_PLUGIN_DIR . 'lib/shortcodes/init.php' );

?>