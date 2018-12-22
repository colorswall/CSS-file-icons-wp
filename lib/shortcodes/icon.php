<?php
const CFI_ICON_TYPES = array(
  'doc',
  'docx',
  'log',
  'txt',
  'wps',
  'csv',
  'dat',
  'ppt',
  'xml',
  'mp3',
  'wav',
  'avi',
  'mov',
  'mp4',
  '3ds',
  'max',
  'gif',
  'ai',
  'svg',
  'pdf',
  'xls',
  'xlsx',
  'sql',
  'exe',
  'js',
  'html',
  'xhtml',
  'css',
  'asp',
  'ttf',
  'dll',
  '7z',
  'zip',
  'c',
  'cs',
  'java',
  'swift',
  'torrent',
  'php',
  'hh',
  'go',
  'py',
  'rss',
  'rb'
);

const CFI_SIZES = array(
  'sm',
  'md',
  'lg',
  'xs'
);

function cfi_icon_type($type, $array = CFI_ICON_TYPES) {
  $icon = !empty($type) ? strtolower($type) : '';
  $icon_type = (in_array($icon, $array)) ? $icon : '';
  return $icon_type;
}

function cfi_icon_size($size, $array = CFI_SIZES) {
  $icon = strtolower($size);
  $icon_size = in_array($icon, $array) ? $icon : '';
  return $icon_size;
}

// Shortocode
function cfi_icon_shortcode( $atts ) {
  extract( shortcode_atts( array(
    'type'  => '',
    'title'  => '',
    'size'  => '',
  ), $atts ) );

  wp_enqueue_style('cfi_styles');
  ob_start();
  $choose_type = cfi_icon_type($atts['type']);
  $class_type = !empty($choose_type) ? ' fi-' . $choose_type : ' fi'; 

  $choose_size = cfi_icon_size($atts['size']);
  $class_size = !empty($choose_size) ? ' fi-size-' . $choose_size : ''; 

  $icon_class = $class_type . $class_size;

  $title = !empty($atts['title']) ? $atts['title'] : $atts['type'];
  $output = '<div class="fi' . $icon_class . '">';
  $output .= '  <div class="fi-content">' . esc_html($title) . '</div>';
  $output .= '</div>';
  ob_end_clean();
  return $output;
}


add_shortcode( 'cfi_icon', 'cfi_icon_shortcode' );

?>