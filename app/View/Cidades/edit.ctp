<div class="cidades form">
<?php echo $this->Form->create('Cidade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cidade'); ?></legend>
	<?php
		echo $this->Form->input('cidcodigo');
		echo $this->Form->input('cidnome');
		echo $this->Form->input('cidestado');
		echo $this->Form->input('cidcep');
		echo $this->Form->input('cidcodigonfe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cidade.cidcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cidade.cidcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
