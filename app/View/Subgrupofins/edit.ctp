<div class="subgrupofins form">
<?php echo $this->Form->create('Subgrupofin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subgrupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('subgfcodigo', array('label' => 'Código'));
		echo $this->Form->input('subgfnome', array('label' => 'Nome'));
		echo $this->Form->input('grupofins', array('label' => 'Grupo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subgrupofin.subgfcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Subgrupofin.subgfcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
