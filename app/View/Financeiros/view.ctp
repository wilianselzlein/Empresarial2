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
			<?php echo $this->Locale->date($financeiro['Financeiro']['finemissao'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimento'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($financeiro['Financeiro']['finvcto'], true); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['finvalor'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto Comercial'); ?></dt>
		<dd>
		        <?php echo $this->Locale->currency($financeiro['Financeiro']['findesccomercial'], true); ?> 
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
			<?php if ($financeiro['Financeiro']['finsituacao'] == 0) echo 'Aberto'; else echo 'Fechado'; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pago'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['finvalorpago'], true); ?> 
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['findesconto'], true); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acréscimo'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['finacrescimo'], true); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxa'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['fintaxa'], true); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Líquido'); ?></dt>
		<dd>
			<?php echo $this->Locale->currency($financeiro['Financeiro']['finliquido'], true); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($financeiro['Financeiro']['finobs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $financeiro['Financeiro']['finregistro'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $financeiro['Financeiro']['finregistro']), null, __('Deseja excluir# %s?', $financeiro['Financeiro']['finregistro'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos de Cob.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Cob.'), array('controller' => 'tipocobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Subgrupos Fin.'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
