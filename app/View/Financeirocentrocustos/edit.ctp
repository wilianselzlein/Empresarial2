<div class="financeirocentrocustos form">
<?php echo $this->Form->create('Financeirocentrocusto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Financeirocentrocusto'); ?></legend>
	<?php
		echo $this->Form->input('finccregistro');
		echo $this->Form->input('fincccentrocusto');
		echo $this->Form->input('finccvalor');
		echo $this->Form->input('finccpercentual');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Financeirocentrocusto.Array')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Financeirocentrocusto.Array'))); ?></li>
		<li><?php echo $this->Html->link(__('List Financeirocentrocustos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Centro Custos'), array('controller' => 'centro_custos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro Custo'), array('controller' => 'centro_custos', 'action' => 'add')); ?> </li>
	</ul>
</div>
