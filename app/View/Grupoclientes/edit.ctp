<div class="grupoclientes form">
<?php echo $this->Form->create('Grupocliente'); ?>
	<fieldset>
		<legend><?php echo __('Editar Grupo de Cliente'); ?></legend>
	<?php
		echo $this->Form->input('gruclicodigo', array('label' => 'Código'));
		echo $this->Form->input('gruclinome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Grupocliente.gruclicodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Grupocliente.gruclicodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
