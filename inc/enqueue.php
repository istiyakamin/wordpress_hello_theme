<?php

/**
 * Enqueue scripts
 *
 * @param string  Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function consult_css_js() {
	wp_enqueue_style( 'flaticon-css', get_template_directory_uri().'/assets/css/flaticon.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'text-animation-css', get_template_directory_uri().'/assets/css/text-animation.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'csancybox-css', get_template_directory_uri().'/assets/csancybox.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'layer-css', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'settings-css', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'plugins-css', get_template_directory_uri().'/assets/css/plugins.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'icons-css', get_template_directory_uri().'/assets/css/icons.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'menu-css', get_template_directory_uri().'/assets/css/menu-css.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/assets/css/main.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'responsiv', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0', 'all' );

	// script start from here

	wp_enqueue_script('jquery-file', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('modernizr-js', get_template_directory_uri().'/assets/js/modernizr.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('waypints-js', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('plugins-js', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('scrollup-js', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('gmaps-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY', array('jquery'), '1.0.0', true);
	wp_enqueue_script('fancybox-js', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('magnific-popup-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js" type="text/javascript', array('jquery'), '1.0.0', true);
	wp_enqueue_script('counterup-js', get_template_directory_uri().'/assets/js/counterup.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('wow-js', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery.lettering.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('textillate-js', get_template_directory_uri().'/assets/js/jquery.textillate.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('mixitup-js', get_template_directory_uri().'/assets/js/mixitup.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('chart-js', get_template_directory_uri().'/assets/js/chart.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('chart-active-js', get_template_directory_uri().'/assets/js/chart-active.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch-tools-js', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('themepunch-revolution-js', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('revolution-action-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('kenburn-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('layeranimation-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('migration-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('navigation-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('parallax-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('slideanims-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('video-js', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('cusotm-js', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'consult_css_js' );








 ?>
