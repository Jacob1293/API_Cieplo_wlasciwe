<?php

include('/user_summary.php');

add_filter('show_admin_bar', '__return_false');

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' ); 

function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function add_classes_to_linked_images($html) {
    $classes = 'media-img'; // can do multiple classes, separate with space

    $patterns = array();
    $replacements = array();

    $patterns[0] = '/<a(?![^>]*class)([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor tag where anchor has no existing classes
    $replacements[0] = '<a\1 class="' . $classes . '"><img\2></a>';

    $patterns[1] = '/<a([^>]*)class="([^"]*)"([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor has existing classes contained in double quotes
    $replacements[1] = '<a\1class="' . $classes . ' \2"\3><img\4></a>';

    $patterns[2] = '/<a([^>]*)class=\'([^\']*)\'([^>]*)>\s*<img([^>]*)>\s*<\/a>/'; // matches img tag wrapped in anchor tag where anchor has existing classes contained in single quotes
    $replacements[2] = '<a\1class="' . $classes . ' \2"\3><img\4></a>';

    $html = preg_replace($patterns, $replacements, $html);

    return $html;
}

add_filter('the_content', 'add_classes_to_linked_images', 100, 1);

function shortcode_pdf() {
    ob_start(); ?>
    <div class="pdfcontainer">
        <object class="pdfview" data="<?php the_field('pdf'); ?>" type="application/pdf"></object>
        <a href="<?php the_field('pdf'); ?>" class="button orange arrow pdfbutton" download>Pobierz PDF</a>
    </div>
    <?php return ob_get_clean();
} 
add_shortcode('pdf', 'shortcode_pdf');

function awesome_acf_responsive_image($image_id,$image_size,$max_width){
	// check the image ID is not blank
	if($image_id != '') {
		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}


// 1. Register new endpoint to use for My Account page
// Note: Resave Permalinks or it will give 404 error

function add_summary_endpoint() {
add_rewrite_endpoint( 'wyniki', EP_ROOT | EP_PAGES );
}

add_action( 'init', 'add_summary_endpoint' );


// ------------------
// 2. Add new query var

function summary_query_vars( $vars ) {
$vars[] = 'wyniki';
return $vars;
}

add_filter( 'query_vars', 'summary_query_vars', 0 );


// ------------------
// 3. Insert the new endpoint into the My Account menu

function add_summary_link_my_account( $items ) {
$items['wyniki'] = 'Wyniki';
return $items;
}

add_filter( 'woocommerce_account_menu_items', 
'add_summary_link_my_account' );


 // ------------------
// 4. Add content to the new endpoint

function shortcode_name(){
    ob_start();
    require_once ( plugin_dir_path(__FILE__) . '/user_summary.php');
    $content = ob_get_clean();
    return $content;
};

add_shortcode('summary_form', 'shortcode_name');

function summary_content() {
echo do_shortcode( ' [summary_form] ' );
}

add_action( 'woocommerce_account_wyniki_endpoint', 'summary_content' );
// Note: add_action must follow 'woocommerce_account_{your-endpoint-slug}_endpoint' format

function PREFIX_add_query_vars($aVars) {
	$aVars[] = "summary_id"; 
	
	return $aVars;
  }
	
// hook PREFIX_add_query_vars function into query_vars
add_filter('query_vars', 'PREFIX_add_query_vars');

?>