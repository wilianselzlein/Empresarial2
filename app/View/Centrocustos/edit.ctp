<div class="centrocustos form">
<?php echo $this->Form->create('Centrocusto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Centrocusto'); ?></legend>
	<?php
		echo $this->Form->input('cencuscodigo');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Centrocusto.cencuscodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Centrocusto.cencuscodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Centrocustos'), array('action' => 'index')); ?></li>
	</ul>
</div>
