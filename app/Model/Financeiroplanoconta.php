<?php
App::uses('AppModel', 'Model');
/**
 * Financeiroplanocontum Model
 *
 * @property Planoconta $Planoconta
 */
class Financeiroplanoconta extends AppModel {

	public $useTable = 'financeiroplanoconta';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'finpcid';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'finpcplanoconta';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'finpcid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'finpcregistro' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'finpcplanoconta' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'finpcvalor' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'finpcpercentual' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'PlanoConta' => array(
			'className' => 'Planocontum',
			'foreignKey' => 'finpcplanoconta',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
