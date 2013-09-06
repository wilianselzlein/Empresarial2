<div class="subgrupofins form">
<?php echo $this->Form->create('Subgrupofin'); ?>
	<fieldset>
		<legend><?php echo __('Editar Subgrupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('subgfcodigo', array('label' => 'Código'));
		echo $this->Form->input('subgfnome', array('label' => 'Nome'));
		echo $this->Form->input('subgfgrupo' ,array('type' => 'select', 'label' => 'Grupo','options'=>$grupofins));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Subgrupofin.subgfcodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Subgrupofin.subgfcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Grupo Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
