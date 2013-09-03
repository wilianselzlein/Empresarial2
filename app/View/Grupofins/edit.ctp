<div class="grupofins form">
<?php echo $this->Form->create('Grupofin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('grufincodigo', array('label' => 'Código'));
		echo $this->Form->input('grufinnome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grupofin.grufincodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Grupofin.grufincodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
