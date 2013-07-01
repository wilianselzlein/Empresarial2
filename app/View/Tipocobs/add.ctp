<div class="tipocobs form">
<?php echo $this->Form->create('Tipocob'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo de Cobrança'); ?></legend>
	<?php
		echo $this->Form->input('tipcobnome', array('label' => 'Nome'));
		echo $this->Form->input('tipcobsituacao', array('label' => 'Situação (A)tivo - (I)nativo'));
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
