<?php

/**
 * All points types total shortcode class.
 *
 * @package WordPoints\All_Types_Total
 * @since   1.0.0
 */

/**
 * Shortcode that displays the total of all points types for a user.
 *
 * @since 1.0.0
 */
class WordPoints_All_Types_Total_Shortcode extends WordPoints_Shortcode {

	/**
	 * @since 1.0.0
	 */
	protected $pairs = array(
		'user_id' => '',
	);

	/**
	 * @since 1.0.0
	 */
	protected function generate() {
		return wordpoints_all_types_total_get_points_total( $this->atts['user_id'] );
	}
}

// EOF
