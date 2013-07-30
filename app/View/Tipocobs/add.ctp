<div class="tipocobs form">
<?php echo $this->Form->create('Tipocob'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo de Cobrança'); ?></legend>
	<?php
		echo $this->Form->input('tipcobnome', array('label' => 'Nome'));
		$sit = array('A' => 'Ativo', 'I' => 'Inativo');	
		echo $this->Form->input('tipcobsituacao', array('type' => 'select', 'label' => 'Situação', 'options' => $sit));
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
