<div class="grupoclientes form">
<?php echo $this->Form->create('Grupocliente'); ?>
	<fieldset>
		<legend><?php echo __('Novo Grupo de Cliente'); ?></legend>
	<?php
		echo $this->Form->input('gruclinome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
