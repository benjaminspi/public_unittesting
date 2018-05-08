<?php
/**
 * Class SampleTest
 *
 * @package Testplugin
 */

/**
 * Sample test case.
 */

class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	function test_sample() {

		$this->assertTrue( true );

	}

	function test_get_columns() {

		require( "./class-ben.php" );

		$ra_table = new RaBen;

		$test_columns = array(
            'id'          => 'ID',
            'title'       => 'Title',
            'description' => 'Description',
            'year'        => 'Year',
            'director'    => 'Director',
            'rating'      => 'Rating'
        );

		$class_columns = $ra_table->get_columns( );

		$this->assertEquals($test_columns, $class_columns);

	}

}
