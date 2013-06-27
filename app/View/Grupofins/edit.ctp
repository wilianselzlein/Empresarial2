<div class="grupofins form">
<?php echo $this->Form->create('Grupofin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grupofin'); ?></legend>
	<?php
		echo $this->Form->input('grufincodigo');
		echo $this->Form->input('grufinnome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grupofin.grufincodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grupofin.grufincodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grupofins'), array('action' => 'index')); ?></li>
	</ul>
</div>
