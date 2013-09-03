<div class="subgrupofins view">
<h2><?php  echo __('Subgrupo Financeiro'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($subgrupofin['Subgrupofin']['subgfcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($subgrupofin['Subgrupofin']['subgfnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Financeiro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subgrupofin['Grupofin']['grufinnome'], array('controller' => 'grupofins', 'action' => 'view', $subgrupofin['Grupofin']['grufincodigo'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subgrupofin['Subgrupofin']['subgfcodigo']), null, __('Are you sure you want to delete # %s?', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
