<?php
App::uses('AppModel', 'Model');
/**
 * GroupWith Model
 *
 * @property Student $StudentPreferences
 */
class GroupWith extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'group_with';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'student_source_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'student_source_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'StudentPreferences' => array(
			'className' => 'Student',
			'joinTable' => 'students',
			'foreignKey' => 'student_source_id',
			'associationForeignKey' => 'students',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
