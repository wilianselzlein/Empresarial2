<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="planoconta form">
<?php echo $this->Form->create('Planocontum'); ?>
	<fieldset>
		<legend><?php echo __('Editar Plano de Conta'); ?></legend>
	<?php
		echo $this->Form->input('placodigo', array('label' => 'Código'));
		echo $this->Form->input('planome', array('label' => 'Nome'));
		echo $this->Form->input('plaempresa' ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresa));
		echo $this->Form->input('plaanalitico', array('label' => 'Analítico', 'id' => 'analitico'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Planocontum.placodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Planocontum.placodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
