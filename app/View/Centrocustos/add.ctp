<div class="centrocustos form">
<?php echo $this->Form->create('Centrocusto'); ?>
	<fieldset>
		<legend><?php echo __('Add Centrocusto'); ?></legend>
	<?php
		echo $this->Form->input('cencusanalitico');
		echo $this->Form->input('cencusnome');
		echo $this->Form->input('cencusempresa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Centrocustos'), array('action' => 'index')); ?></li>
	</ul>
</div>
