<?php
/**
 * GroupWithFixture
 *
 */
class GroupWithFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'group_with';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'student_source_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'student_preference_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('student_source_id', 'student_preference_id'), 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'student_source_id' => 1,
			'student_preference_id' => 1
		),
	);

}
