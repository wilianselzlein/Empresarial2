<div class="bancos form">
<?php echo $this->Form->create('Banco'); ?>
	<fieldset>
		<legend><?php echo __('Editar Banco'); ?></legend>
	<?php
		echo $this->Form->input('bancodigo', array('label' => 'Código'));
		echo $this->Form->input('bannome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Banco.bancodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Banco.bancodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
