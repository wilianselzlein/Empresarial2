<?php
App::uses('AppModel', 'Model');
/**
 * Financeirocentrocusto Model
 *
 * @property CentroCusto $CentroCusto
 */
class Financeirocentrocusto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'financeirocentrocusto';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'finccregistro';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fincccentrocusto';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'finccregistro' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fincccentrocusto' => array(
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
		'CentroCusto' => array(
			'className' => 'CentroCusto',
			'foreignKey' => 'fincccentrocusto',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
