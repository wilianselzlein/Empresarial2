<?php
App::uses('AppModel', 'Model');
/**
 * Centrocusto Model
 *
 * @property Empresa $Empresas
 */
class Centrocusto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'centrocusto';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cencuscodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cencusnome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cencuscodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cencusanalitico' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cencusnome' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Empresa' => array(
			'className' => 'empresa',
			'foreignKey' => 'cencusempresa',
			'conditions' => array('CentroCusto.cencusempresa = Empresa.empcodigo'),
			'depend' => true,
			'fields' => '',
			'order' => ''
		)
	);
}
