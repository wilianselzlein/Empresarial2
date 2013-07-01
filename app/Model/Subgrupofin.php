<?php
App::uses('AppModel', 'Model');
/**
 * Subgrupofin Model
 *
 * @property Grupofin $Grupofin
 */
class Subgrupofin extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'subgrupofin';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'subgfcodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'subgfnome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'subgfcodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subgfnome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subgfgrupo' => array(
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
		'Grupofin' => array(
			'className' => 'Grupofin',
			'foreignKey' => 'subgfgrupo',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
