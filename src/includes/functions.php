<?php

/**
 * The module's functions.
 *
 * @package WordPoints\All_Types_Total
 * @since   1.0.0
 */

/**
 * Get the total of all points types.
 *
 * @since 1.0.0
 *
 * @param int $user_id The ID of the user to retrieve the total of all types for.
 *
 * @return int The total points that the user has of all types.
 */
function wordpoints_all_types_total_get_points_total( $user_id ) {

	if ( ! wordpoints_posint( $user_id ) ) {
		return 0;
	}

	$total = 0;

	foreach ( (array) wordpoints_get_points_types() as $slug => $data ) {

		$total += wordpoints_get_points( $user_id, $slug );
	}

	return $total;
}

// EOF
