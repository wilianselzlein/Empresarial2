<?php
App::uses('AppModel', 'Model');
/**
 * Estado Model
 *
 * @property pais $pais
 */
class Estado extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'estado';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'estcodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'estnome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estcodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estnome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estsigla' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estpais' => array(
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
		'Pais' => array(
			'className' => 'pais',
			'foreignKey' => false,
			'conditions' => array('Pais.paicodigo = Estado.estpais'),
			'depend' => true,
			'fields' => '',
			'order' => ''
		)
	);
	public $hasMany = array(
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidestado',
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
