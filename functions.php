<?php

add_action('wp_enqueue_scripts', 'porto_child_css', 1001);

// Load CSS
function porto_child_css()
{
	// porto child theme styles
	wp_deregister_style('styles-child');
	wp_register_style('styles-child', esc_url(get_stylesheet_directory_uri()) . '/style.css');
	wp_enqueue_style('styles-child');

	if (is_rtl()) {
		wp_deregister_style('styles-child-rtl');
		wp_register_style('styles-child-rtl', esc_url(get_stylesheet_directory_uri()) . '/style_rtl.css');
		wp_enqueue_style('styles-child-rtl');
	}
}

add_action( 'wp_enqueue_scripts', 'porto_child_js', 1002 );
function porto_child_js() {
	wp_register_script( 'porto-child-js', esc_url( get_stylesheet_directory_uri() ) . '/custom.js', array('jquery', 'jquery-magnific-popup'), '', true);
	wp_enqueue_script( 'porto-child-js' );
}

add_filter( 'script_loader_tag', 'porto_script_add_async_attribute', 10, 2 );
function porto_script_add_async_attribute( $tag, $handle ) {
	// add script handles to the array below
	$scripts_to_async = array( 'porto-child-js' );
	if ( in_array( $handle, $scripts_to_async ) ) {
		return str_replace( ' src', ' async="async" src', $tag );
	}
	return $tag;
}

add_action('wp_footer', 'porto_draw_login_form');
function porto_draw_login_form() {
	?>
	<div id="login_form_popup" class="login-form-popup" style="display: none">
		<div class="featured-box align-left porto-user-box">
			<div class="box-content">
				<?php
				echo do_shortcode('[wpforms id="2595"]');
				?>
			</div>
		</div>
		<a id="porto_login_form_trigger" href="#login_form_popup" style="display: none"></a>
	</div>
	<div id="register_form_popup" class="login-form-popup" style="display: none">
		<div class="featured-box align-left porto-user-box">
			<div class="box-content">
				<?php
				echo do_shortcode('[wpforms id="2587"]');
				?>
			</div>
		</div>
		<a id="porto_register_form_trigger" href="#register_form_popup" style="display: none"></a>
	</div>
<?php
}

add_action('porto_header_socials', 'porto_custom_whatsapp_link');
function porto_custom_whatsapp_link($html) {
	$wa_pos = strpos($html, 'share-whatsapp');
	if ($wa_pos === false) {
		return $html;
	}

	global $porto_settings;

	$link_pos = strpos($html, 'href="', $wa_pos);
	$link_pos_end = strpos($html, 'data-action', $link_pos);
	$new_html = substr($html, 0, $link_pos);
	$new_html .= 'href="https://wa.me/' . esc_attr( $porto_settings['header-social-whatsapp'] ) .'" ';
	$new_html .= substr($html, $link_pos_end);
	return $new_html;
}

include 'widgets/follow_us2.php';