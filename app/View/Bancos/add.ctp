<div class="bancos form">
<?php echo $this->Form->create('Banco'); ?>
	<fieldset>
		<legend><?php echo __('Novo Banco'); ?></legend>
	<?php
		echo $this->Form->input('bannome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo Menu ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
