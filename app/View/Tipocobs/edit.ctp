<div class="tipocobs form">
<?php echo $this->Form->create('Tipocob'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipocob'); ?></legend>
	<?php
		echo $this->Form->input('tipcobcodigo');
		echo $this->Form->input('tipcobnome');
		echo $this->Form->input('tipcobsituacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipocob.tipcobcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tipocob.tipcobcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipocobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
