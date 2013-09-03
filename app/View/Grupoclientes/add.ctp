<div class="grupoclientes form">
<?php echo $this->Form->create('Grupocliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Grupo de Cliente'); ?></legend>
	<?php
		echo $this->Form->input('gruclinome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
