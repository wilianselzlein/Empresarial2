<div class="financeirocentrocustos view">
<h2><?php  echo __('Financeirocentrocusto'); ?></h2>
	<dl>
		<dt><?php echo __('Finccregistro'); ?></dt>
		<dd>
			<?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccregistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Centro Custo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeirocentrocusto['CentroCusto']['cencusnome'], array('controller' => 'centro_custos', 'action' => 'view', $financeirocentrocusto['CentroCusto']['cencuscodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finccvalor'); ?></dt>
		<dd>
			<?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccvalor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finccpercentual'); ?></dt>
		<dd>
			<?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccpercentual']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financeirocentrocusto'), array('action' => 'edit', $financeirocentrocusto['Financeirocentrocusto']['finccregistro'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financeirocentrocusto'), array('action' => 'delete', $financeirocentrocusto['Financeirocentrocusto']['finccregistro']), null, __('Are you sure you want to delete # %s?', $financeirocentrocusto['Financeirocentrocusto']['finccregistro'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Financeirocentrocustos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financeirocentrocusto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centro Custos'), array('controller' => 'centro_custos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro Custo'), array('controller' => 'centro_custos', 'action' => 'add')); ?> </li>
	</ul>
</div>
