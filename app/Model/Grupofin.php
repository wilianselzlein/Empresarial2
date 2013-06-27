<?php
App::uses('AppModel', 'Model');
/**
 * Grupofin Model
 *
 */
class Grupofin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'grupofin';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'grufincodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'grufinnome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'grufincodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'grufinnome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
