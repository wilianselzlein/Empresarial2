<div class="financeiros view">
<h2><?php  echo __('Financeiro'); ?></h2>
	<dl>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finregistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['fintipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiro['Empresa']['empnome'], array('controller' => 'empresas', 'action' => 'view', $financeiro['Empresa']['empcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiro['Cliente']['clirazao'], array('controller' => 'clientes', 'action' => 'view', $financeiro['Cliente']['clicodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['findcto1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relacional'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['findcto2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parcela'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finparcela']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emissão'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finemissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimento'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finvcto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Previsão'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finprevvcto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finvalor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto Comercial'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['findesccomercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Cobrança'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiro['Tipocob']['tipcobnome'], array('controller' => 'tipocobs', 'action' => 'view', $financeiro['Tipocob']['tipcobcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subgrupo Financeiro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiro['Subgrupofin']['subgfnome'], array('controller' => 'subgrupofins', 'action' => 'view', $financeiro['Subgrupofin']['subgfcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nosso Número'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finnossonum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finsituacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pago'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finvalorpago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['findesconto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acréscimo'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finacrescimo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxa'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['fintaxa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Líquido'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finliquido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faturamento'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finfaturamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Protesto'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['findataprotesto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação 2'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finobs2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financeiro['Financeiro']['finregistro'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financeiro['Financeiro']['finregistro']), null, __('Are you sure you want to delete # %s?', $financeiro['Financeiro']['finregistro'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos de Cob.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo de Cob.'), array('controller' => 'tipocobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subgrupos Fin.'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
