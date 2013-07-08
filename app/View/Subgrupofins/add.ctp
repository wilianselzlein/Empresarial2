<div class="subgrupofins form">
<?php echo $this->Form->create('Subgrupofin'); ?>
	<fieldset>
		<legend><?php echo __('Add Subgrupo Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('subgfnome', array('label' => 'Nome'));
		echo $this->Form->input('subgfgrupo' ,array('type' => 'select', 'label' => 'Grupo','options'=>$grupofins));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupos Financeiros'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
