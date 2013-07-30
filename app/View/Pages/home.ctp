<?php
/**
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
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<div class="actions">
	<h4><?php echo __('Parâmetros'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Empresa'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Usuários'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	</ul>
	<br/>
	<h4><?php echo __('Cidades'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Estados'), array('controller' => 'estados', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Paises'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
	</ul>
	<br/>
	<h4><?php echo __('Clientes'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Grupos de Clientes'), array('controller' => 'grupoclientes', 'action' => 'index')); ?> </li>
	</ul>
        <br/>
	<h4><?php echo __('Financeiro'); ?></h4>
	<ul>
		<li><?php echo $this->Html->link(__('Financeiro'), array('controller' => 'financeiros', 'action' => 'index')); ?> </li>	
		<li><?php echo $this->Html->link(__('Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Centros de Custo'), array('controller' => 'centrocustos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Planos de Conta'), array('controller' => 'planoconta', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Tipos de Cobrança'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Grupos Financeiros'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Subgrupos Financeiros'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Formas de Pgto'), array('controller' => 'formapgtos', 'action' => 'index')); ?> </li>
	</ul>
</div>