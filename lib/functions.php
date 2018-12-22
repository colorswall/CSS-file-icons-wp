<?php 
// Frontend
add_action( 'wp_enqueue_scripts', 'cfi_frontend_files' );

function cfi_frontend_files() {
  wp_register_style( 'cfi_styles', CFI_PLUGIN_URL . 'assets/css/css-file-icons.css', '', CFI_VERSION, 'all' );
}

?>