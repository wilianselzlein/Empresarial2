<div class="estados form">
<?php echo $this->Form->create('Estado'); ?>
	<fieldset>
		<legend><?php echo __('Editar Estado'); ?></legend>
	<?php
		echo $this->Form->input('estcodigo', array('label' => 'Código'));
		echo $this->Form->input('estnome', array('label' => 'Nome'));
		echo $this->Form->input('estsigla', array('label' => 'Sigla'));
		echo $this->Form->input("estpais" ,array('type' => 'select', 'label' => 'País','options'=>$pais));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Estado.estcodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Estado.estcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Países'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo País'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
