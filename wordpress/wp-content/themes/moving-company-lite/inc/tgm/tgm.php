<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function moving_company_lite_register_recommended_plugins() {
	$plugins = array(
	
		array(
			'name'             => __( 'Woocommerce', 'moving-company-lite' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'moving_company_lite_register_recommended_plugins' );