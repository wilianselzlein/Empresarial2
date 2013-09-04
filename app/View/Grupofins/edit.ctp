<div class="grupofins form">
<?php echo $this->Form->create('Grupofin'); ?>
	<fieldset>
		<legend><?php echo __('Editar Grupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('grufincodigo', array('label' => 'Código'));
		echo $this->Form->input('grufinnome', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Grupofin.grufincodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Grupofin.grufincodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
