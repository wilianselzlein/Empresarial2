<?php
App::uses('AppModel', 'Model');
/**
 * Banco Model
 *
 */
class Banco extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'banco';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'bancodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'bannome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bancodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'bannome' => array(
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
