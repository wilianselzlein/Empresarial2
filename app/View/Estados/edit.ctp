<div class="estados form">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Estado'); ?></legend>
	<?php
		echo $this->Form->input('estcodigo');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Estado.estcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Estado.estcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pais'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estcodigo Paicodigo'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
