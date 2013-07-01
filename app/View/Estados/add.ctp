<div class="estados form">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Add Estado'); ?></legend>
	<?php
		echo $this->Form->input('estnome', array('label' => 'Nome'));
		echo $this->Form->input('estsigla', array('label' => 'Sigla'));
		echo $this->Form->input('pais', array('label' => 'País'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Países'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New País'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
