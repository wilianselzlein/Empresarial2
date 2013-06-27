<div class="estados form">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Add Estado'); ?></legend>
	<?php
		echo $this->Form->input('estnome');
		echo $this->Form->input('estsigla');
		echo $this->Form->input('pais', array('label' => 'País'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pais'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
