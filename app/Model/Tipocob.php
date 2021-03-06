<?php
App::uses('AppModel', 'Model');
/**
 * Tipocob Model
 *
 */
class Tipocob extends AppModel {

	public $actsAs = array('Containable');
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipocob';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'tipcobcodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tipcobnome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tipcobcodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipcobnome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipcobsituacao' => array(
			'rule' => array('multiple', array('in'  => array('A', 'I')))
		),
	);
	public $hasMany = array(
		'Fin' => array(
			'className' => 'Financeiro',
			'foreignKey' => 'fintipocob',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
