<div class="subgrupofins form">
<?php echo $this->Form->create('Subgrupofin'); ?>
	<fieldset>
		<legend><?php echo __('Novo Subgrupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('subgfnome', array('label' => 'Nome'));
		echo $this->Form->input('subgfgrupo' ,array('type' => 'select', 'label' => 'Grupo','options'=>$grupofins));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Grupos Financeiros'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
