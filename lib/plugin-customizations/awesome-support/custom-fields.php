<?php
/**
 * @package   Awesome Support/Custom Fields
 * @author    ThemeAvenue <web@themeavenue.net>
 * @license   GPL-2.0+
 * @link      http://themeavenue.net
 * @copyright 2014 ThemeAvenue
 *
 * @wordpress-plugin
 * Plugin Name:       Awesome Support: My Custom Fields
 * Plugin URI:        http://getawesomesupport.com
 * Description:       Adds custom fields to the Awesome Support ticket submission form.
 * Version:           0.1.0
 * Author:            ThemeAvenue
 * Author URI:        http://themeavenue.net
 * Text Domain:       wpas
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( class_exists( 'Awesome_Support' ) ) {
	add_action( 'plugins_loaded', 'awp_as_custom_fields' );
}

/**
 * Register all custom fields after the plugin is safely loaded.
 */
function awp_as_custom_fields() {

	wpas_add_custom_field(
		'product_name', array(
			'title'    => __( 'Name of Your Plugin/Theme' ),
			'callback' => 'text',
			'label'    => __( 'Name of Your Plugin/Theme' )
		)
	);

	wpas_add_custom_field(
		'product_url', array(
			'title'       => __( 'Product URL' ),
			'callback'    => 'text',
			'label'       => __( 'Product URL' ),
			'placeholder' => 'https://github.com/username/product-name',
		)
	);

}
