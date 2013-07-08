<?php
App::uses('AppModel', 'Model');
/**
 * Planocontum Model
 *
 * @property Empresa $Empresa
 */
class Planocontum extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'placodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'planome';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'placodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'planome' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'plaanalitico' => array(
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
			'className' => 'Empresa',
			'foreignKey' => false,
			'conditions' => array('Planocontum.plaempresa = Empresa.empcodigo'),
			'fields' => '',
			'order' => ''
		)
	);
}
