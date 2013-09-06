<div class="tipocobs form">
<?php echo $this->Form->create('Tipocob'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tipo de Cobrança'); ?></legend>
	<?php
		echo $this->Form->input('tipcobcodigo', array('label' => 'Código'));
		echo $this->Form->input('tipcobnome', array('label' => 'Nome'));
		$sit = array('A' => 'Ativo', 'I' => 'Inativo');	
		echo $this->Form->input('tipcobsituacao', array('type' => 'select', 'label' => 'Situação', 'options' => $sit));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Tipocob.tipcobcodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Tipocob.tipcobcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
