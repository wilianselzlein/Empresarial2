<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="cidades form">
<?php echo $this->Form->create('Cidade'); ?>
	<fieldset>
		<legend><?php echo __('Novo Cidade'); ?></legend>
	<?php
		echo $this->Form->input('cidnome', array('label' => 'Nome'));
		echo $this->Form->input("cidestado" ,array('type' => 'select', 'label' => 'UF','options'=>$estados));
		echo $this->Form->input('cidcep', array('label' => 'CEP', 'id' => 'cep'));
		echo $this->Form->input('cidcodigonfe', array('label' => 'Código NFE'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
