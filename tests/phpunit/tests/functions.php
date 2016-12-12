<?php

/**
 * Test case for the module's functions.
 *
 * @package WordPoints\All_Types_Total
 * @since 1.0.0
 */

/**
 * Tests the module's functions.
 *
 * @since 1.0.0
 */
class WordPoints_All_Types_Total_Functions_Test extends WordPoints_PHPUnit_TestCase {

	/**
	 * Test that it returns 0 if the user ID is invalid.
	 *
	 * @since 1.0.0
	 *
	 * @covers ::wordpoints_all_types_total_get_points_total
	 */
	public function test_returns_0_for_invalid_user() {

		$this->assertSame(
			0
			, wordpoints_all_types_total_get_points_total( 'invalid' )
		);
	}

	/**
	 * Test that it returns 0 if the user has no points.
	 *
	 * @since 1.0.0
	 *
	 * @covers ::wordpoints_all_types_total_get_points_total
	 */
	public function test_returns_0_for_no_points() {

		$this->factory->wordpoints->points_type->create_many( 2 );

		$this->assertSame(
			0
			, wordpoints_all_types_total_get_points_total(
				$this->factory->user->create()
			)
		);
	}

	/**
	 * Test that it returns the total of all points types.
	 *
	 * @since 1.0.0
	 *
	 * @covers ::wordpoints_all_types_total_get_points_total
	 */
	public function test_returns_total() {

		$slugs = $this->factory->wordpoints->points_type->create_many( 2 );

		$user_id = $this->factory->user->create();

		wordpoints_set_points( $user_id, 100, $slugs[0], 'testing' );
		wordpoints_set_points( $user_id, 50, $slugs[1], 'testing' );

		$this->assertSame(
			150
			, wordpoints_all_types_total_get_points_total( $user_id )
		);
	}
}

// EOF
