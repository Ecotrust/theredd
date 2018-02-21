<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

/* Please don't rewrite this file in child theme */

function the_core_get_the_theme_id() {
	return 'haven';
}


function the_core_get_the_theme_name() {
	return esc_html__( 'Haven', 'the-core' );
}


if ( ! function_exists( 'the_core_style_file_name' ) ) :
	/**
	 * Return the file name for file that is generated with all theme styles
	 *
	 * @return string
	 */
	function the_core_style_file_name() {
		return apply_filters( '_filter_the_core_style_file_name', 'haven-style' );
	}
endif;


/**
 * @param FW_Ext_Backups_Demo[] $demos
 *
 * @return FW_Ext_Backups_Demo[]
 */
function _the_core_filter_fw_ext_backups_demos( $demos ) {
	$demos_array = array(
		'the-lavish'   => array(
			'title'        => esc_html__( 'The Lavish', 'the-core' ),
			'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/the-lavish.png',
			'preview_link' => 'https://demo.themefuse.com/responsive-wordpress-hotel-theme/',
		),
		'beach-resort' => array(
			'title'        => esc_html__( 'Beach Resort', 'the-core' ),
			'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/beach-resort.png',
			'preview_link' => 'https://demo.themefuse.com/hotel-booking-wordpress-theme/',
		),
		'alpine-lodge' => array(
			'title'        => esc_html__( 'Alpine Lodge', 'the-core' ),
			'screenshot'   => 'http://updates.themefuse.com/demos/screenshots/alpine-lodge.png',
			'preview_link' => 'https://demo.themefuse.com/accommodation-wordpress-theme/',
		),
	);

	foreach ( $demos_array as $id => $data ) {
		$demo = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'     => 'http://updates.themefuse.com/demos/',
			'file_id' => $id,
		) );
		$demo->set_title( $data['title'] );
		$demo->set_screenshot( $data['screenshot'] );
		$demo->set_preview_link( $data['preview_link'] );

		$demos[ $demo->get_id() ] = $demo;

		unset( $demo );
	}

	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_the_core_filter_fw_ext_backups_demos' );


function the_core_get_the_demo_required_plugins() {
	return array(
		'the-lavish'   => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'beach-resort' => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
		'alpine-lodge' => array(
			array(
				'name'   => 'Slider Revolution',
				'slug'   => 'revslider',
				'source' => 'http://updates.themefuse.com/plugins/revslider.zip'
			),
			array(
				'name'   => 'LayerSlider WP',
				'slug'   => 'LayerSlider',
				'source' => 'http://updates.themefuse.com/plugins/LayerSlider.zip'
			),
		),
	);
}


function the_core_tgm_required_plugins() {
	return array(
		array(
			'name'     => esc_html__( 'Unyson', 'the-core' ),
			'slug'     => 'unyson',
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'Slider Revolution', 'the-core' ),
			'slug'     => 'revslider',
			'source'   => esc_url( 'http://updates.themefuse.com/plugins/revslider.zip' ),
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'LayerSlider WP', 'the-core' ),
			'slug'     => 'LayerSlider',
			'source'   => esc_url( 'http://updates.themefuse.com/plugins/LayerSlider.zip' ),
			'required' => false,
		),
		array(
			'name'     => esc_html__( 'Smart Slider 3 Pro', 'the-core' ),
			'slug'     => 'nextend-smart-slider3-pro',
			'source'   => 'http://updates.themefuse.com/plugins/nextend-smart-slider3-pro.zip',
			'required' => true,
		),
		array(
			'name'     => esc_html__( 'TranslatePress', 'the-core' ),
			'slug'     => 'translatepress-multilingual',
			'required' => false,
		),
	);
}


