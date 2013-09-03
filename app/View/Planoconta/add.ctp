<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="planoconta form">
<?php echo $this->Form->create('Planocontum'); ?>
	<fieldset>
		<legend><?php echo __('Add Plano de Contas'); ?></legend>
	<?php
		echo $this->Form->input('planome', array('label' => 'Nome'));
		echo $this->Form->input('plaempresa' ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresa));
		echo $this->Form->input('plaanalitico', array('label' => 'Analítico', 'id' => 'analitico'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
