<div class="bancos form">
<?php echo $this->Form->create('Banco'); ?>
	<fieldset>
		<legend><?php echo __('Edit Banco'); ?></legend>
	<?php
		echo $this->Form->input('bancodigo', array('label' => 'Código'));
		echo $this->Form->input('bannome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Banco.bancodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Banco.bancodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
