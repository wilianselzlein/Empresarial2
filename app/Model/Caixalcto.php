<?php
App::uses('AppModel', 'Model');
/**
 * Caixalcto Model
 *
 * @property formapgto $formapgto
 * @property tfinanceiropgto $caixafinanceiro
 */
class Caixalcto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'caixalcto';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'cailctcodigo';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'cailcthistorico';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cailctcodigo' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cailctoperacao' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cailcthistorico' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cailctdata' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cailcthora' => array(
			'time' => array(
				'rule' => array('time'),
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
 * hasOne associations
 *
 * @var array
 */
/*	public $hasOne = array(
		'Formapgto' => array(
			'className' => 'Formapgto',
			'foreignKey' => '',
			'conditions' => 'Caixalcto.cailctformapgto = Formapgto.forcodigo',
			'fields' => '',
			'order' => ''
		)
	);
*/	
	public $belongsTo = array(
		'Formapgto' => array(
			'className' => 'Formapgto',
			'foreignKey' => 'cailctformapgto',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 *
	public $hasAndBelongsToMany = array(
		'CaixaPgto' => array(
			'className' => 'Financeiropgto',
			'joinTable' => 'Financeiropgto',
			'foreignKey' => 'cailctdcto',
			'associationForeignKey' => 'finpglctocx01',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
*/
}
