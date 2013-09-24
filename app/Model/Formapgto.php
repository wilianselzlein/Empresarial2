<?php
App::uses('AppModel', 'Model');
/**
 * Formapgto Model
 *
 */
class Formapgto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'formapgto';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'forcodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fornome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'forcodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fornome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fortipo' => array(
			'rule' => array('multiple', array('in'  => array('1', '2')))
		),
		'formesdia' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'forprazofixo' => array(
			'range' => array(
				'rule' => array('range'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'forsigla' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'forsituacao' => array(
			'rule' => array('multiple', array('in'  => array('A', 'I')))
		),
		'forcontabil' => array(
			'rule' => array('multiple', array('in'  => array('S', 'N')))
		),
	);
	public $hasMany = array(
		'Lctos' => array(
			'className' => 'Caixalcto',
			'foreignKey' => 'cailctformapgto',
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
