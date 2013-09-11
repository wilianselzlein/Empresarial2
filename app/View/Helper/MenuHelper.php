<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Helper', 'View');
App::import('Model', 'Financeiro');
/*App::import('Vendor', 'vCandidatoCidade', array('file' => 'views' . DS . 'vCandidatoCidade.php'));
App::import('Vendor', 'vSalario');*/

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class MenuHelper extends Helper {

	public function GrafAnual($tipo = '') { //1 - receber	    2 - pagar
	    if ($tipo == '')
		$campo = 'extract(month from finvcto)';
	    else
		$campo = 'MONTHNAME(finvcto)';
	    $model = new Financeiro();
	    $rows = $model->find('all', array(
		'fields' => array('Financeiro.fintipo', $campo.' as mes', 'SUM(Financeiro.finvalor) as valor'), 
		'order'  => array('Financeiro.fintipo', $campo), 
		'group'  => array('Financeiro.fintipo', $campo),
	    ));
	    $nome = "";
	    foreach ($rows as $v => $t) {
		if ($tipo == '') 
		    $nome = $nome . $t[0]['valor'] . ","; 
		else
		    $nome = $nome . "'". $t[0]['mes'] . "',"; 
	    }
	    return substr($nome,0,-1);
	}
	
}
