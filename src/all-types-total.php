<?php

/**
 * Main file of the module.
 *
 * ---------------------------------------------------------------------------------|
 * Copyright 2016  J.D. Grimes  (email : jdg@codesymphony.co)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or later, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * ---------------------------------------------------------------------------------|
 *
 * @package all-types-total
 * @version 1.0.0
 * @author  J.D. Grimes <jdg@codesymphony.co>
 * @license GPLv2+
 */

WordPoints_Modules::register(
	'
		Module Name: All Types Total
		Author:      J.D. Grimes
		Author URI:  https://codesymphony.co/
		Module URI:  https://wordpoints.org/modules/all-types-total/
		Version:     1.0.0
		License:     GPLv2+
		Description: Display the total of all points for a user using a shortcode [wordpoints_all_types_total].
		Text Domain: wordpoints-all-types-total
		Domain Path: /languages
		Channel:     wordpoints.org
		ID:          934
		Namespace:   All_Types_Total
	'
	, __FILE__
);

WordPoints_Class_Autoloader::register_dir( dirname( __FILE__ ) . '/classes/' );

/**
 * The module's functions.
 *
 * @since 1.0.0
 */
require_once dirname( __FILE__ ) . '/includes/functions.php';

WordPoints_Shortcodes::register(
	'wordpoints_all_types_total'
	, 'WordPoints_All_Types_Total_Shortcode'
);

// EOF
