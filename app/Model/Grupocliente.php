<?php
App::uses('AppModel', 'Model');
/**
 * Grupocliente Model
 *
 */
class Grupocliente extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'grupocliente';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'gruclicodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'gruclinome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'gruclicodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gruclinome' => array(
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
