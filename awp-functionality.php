<?php
/**
 * Plugin Name: AWP Functionality
 * Plugin URI: https://github.com/advancedwp/awp-functionality
 * Description: This contains all custom functions for the advancedwp.org website.
 * Version: 1.0
 * Author: The AdvancedWP Community
 * Author URI: http://www.advancedwp.org
 * GitHub Plugin URI: https://github.com/advancedwp/awp-functionality
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

// Plugin Directory
define( 'AWP_DIR', dirname( __FILE__ ) );

// Post Types
//include_once( AWP_DIR . '/lib/functions/post-types.php' );

// Taxonomies
//include_once( AWP_DIR . '/lib/functions/taxonomies.php' );

// Plugin Customizations
include_once( AWP_DIR . '/lib/plugin-customizations/all.php' );

// Custom Post Types
include_once( AWP_DIR . '/lib/custom-post-types.php' );

// Custom Functions
include_once( AWP_DIR . '/lib/custom-functions.php' );

// Custom Functions
include_once( AWP_DIR . '/lib/custom-taxonomies.php' );
