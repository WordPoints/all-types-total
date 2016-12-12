<?php

/**
 * Test case for WordPoints_All_Types_Total_Shortcode.
 *
 * @package WordPoints\All_Types_Total
 * @since 1.0.0
 */

/**
 * Tests WordPoints_All_Types_Total_Shortcode.
 *
 * @since 1.0.0
 *
 * @covers WordPoints_All_Types_Total_Shortcode
 */
class WordPoints_All_Types_Total_Shortcode_Test extends WordPoints_PHPUnit_TestCase {

	/**
	 * Test that it returns 0 if the user has no points.
	 *
	 * @since 1.0.0
	 */
	public function test_returns_0_for_no_points() {

		$this->factory->wordpoints->points_type->create_many( 2 );

		$this->assertSame(
			0
			, $this->do_shortcode(
				'wordpoints_all_types_total'
				, array( 'user_id' => $this->factory->user->create() )
			)
		);
	}

	/**
	 * Test that it returns the total of all points types.
	 *
	 * @since 1.0.0
	 */
	public function test_returns_total() {

		$slugs = $this->factory->wordpoints->points_type->create_many( 2 );

		$user_id = $this->factory->user->create();

		wordpoints_set_points( $user_id, 100, $slugs[0], 'testing' );
		wordpoints_set_points( $user_id, 50, $slugs[1], 'testing' );

		$this->assertSame(
			150
			, $this->do_shortcode(
				'wordpoints_all_types_total'
				, array( 'user_id' => $user_id )
			)
		);
	}
}

// EOF
