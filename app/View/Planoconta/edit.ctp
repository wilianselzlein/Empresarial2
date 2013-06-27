<div class="planoconta form">
<?php echo $this->Form->create('Planocontum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Planocontum'); ?></legend>
	<?php
		echo $this->Form->input('placodigo');
		echo $this->Form->input('planome');
		echo $this->Form->input('plaempresa');
		echo $this->Form->input('plaanalitico');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Planocontum.placodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Planocontum.placodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Planoconta'), array('action' => 'index')); ?></li>
	</ul>
</div>
