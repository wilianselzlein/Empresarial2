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
  
	public function GrafAnual($tipo = '', $situacao = '') { //1 - receber	    2 - pagar
	    if ($tipo == '')
		return "'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'";
	    else {
		$model = new Financeiro();	
		$nome = "";
		
		for ($index = 1; $index <= 12; $index++) {
		    $rows = $model->find('all', array(
			'conditions' => array('Extract(Month from Financeiro.finvcto)' => $index, 'Financeiro.Fintipo' => $tipo, 'Financeiro.finsituacao LIKE ' => '%'.$situacao.'%'),
			'fields' => array(/*'Financeiro.fintipo', */'SUM(Financeiro.finvalor) as valor'), 
			/*'order'  => array('Financeiro.fintipo'), 
			'group'  => array('Financeiro.fintipo'),*/
		    ));
		    foreach ($rows as $v => $o) {
			if ($o[0]['valor'] > 0) {
			    $nome .= $o[0]['valor'] . ", "; 
			} else 
			    $nome .= "0, ";
		    }
		}
		return substr($nome,0,-2);
	    }
	}

	public function GrafPerc($tipo = '', $dias = 0, $situacao = '') { //1 - receber	    2 - pagar
	    $model = new Financeiro();
	    $rows = $model->find('all', array(
		'conditions' => array('Financeiro.finvcto BETWEEN ? and ? ' =>  Array(date("y-m-d"), date("y-m-d", strtotime("+".$dias." days"))), 'Financeiro.finsituacao LIKE ' => '%'.$situacao.'%'),
		'fields' => array('SUM(Financeiro.finvalor) as valor'), 
	    ));
	    $total = 0.00;
	    foreach ($rows as $v => $o) {
		$total = $o[0]['valor'];
	    }

	    $rows = $model->find('all', array(
		'conditions' => array('Financeiro.finvcto BETWEEN ? and ? ' =>  Array(date("y-m-d"), date("y-m-d", strtotime("+".$dias." days"))), 'Financeiro.Fintipo' => $tipo, 'Financeiro.finsituacao LIKE ' => '%'.$situacao.'%'),
		'fields' => array('SUM(Financeiro.finvalor) as valor'), 
	    ));
	    foreach ($rows as $v => $o) {
		if (($o[0]['valor'] > 0) && ($total > 0.00)) {
		    return round($o[0]['valor'] / $total * 100);
		} else 
		    return 0;
	    }
	}
	
	public function GrafGrupoFin($tipo = '', $situacao = '', $valor = true) { //1 - receber	    2 - pagar
	    $model = new Financeiro();	
	    $nome = "";

	    $rows = $model->find('all', array(		    
		'conditions' => array('Financeiro.Fintipo' => $tipo, 'Financeiro.finsituacao LIKE ' => '%'.$situacao.'%'),
		'joins' => array
		    (array('table' => 'tsubgrupofin','alias' => 'tsgf','type' => 'INNER','conditions' => array('tsgf.subgfcodigo = Financeiro.finsubgrupofin')),
		    (array('table' => 'tgrupofin','alias' => 'tgf','type' => 'INNER','conditions' => array('tgf.grufincodigo = tsgf.subgfgrupo')))),
		'fields' => array('tgf.grufinnome as nome', 'SUM(Financeiro.finvalor) as valor'), 
		'order'  => array('tgf.grufinnome'), 
		'group'  => array('tgf.grufinnome'),
	    ));
	    
	    foreach ($rows as $v => $o) {
		if ($valor)
		    $nome .= $o[0]['valor'] . ", ";
		else
		    $nome .= "'".$o['tgf']['nome'] . "', ";
	    }

	    return substr($nome,0,-2);
	}
}
