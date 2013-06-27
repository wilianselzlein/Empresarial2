<div class="tipocobs form">
<?php echo $this->Form->create('Tipocob'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipocob'); ?></legend>
	<?php
		echo $this->Form->input('tipcobnome');
		echo $this->Form->input('tipcobsituacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipocobs'), array('action' => 'index')); ?></li>
	</ul>
</div>
