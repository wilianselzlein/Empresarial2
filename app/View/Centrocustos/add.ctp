<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="centrocustos form">
<?php echo $this->Form->create('Centrocusto'); ?>
	<fieldset>
		<legend><?php echo __('Novo Centro de Custo'); ?></legend>
	<?php
		//echo $this->Form->input('cencusanalitico', array('label' => 'Analítico', 'id' => 'analitico'));
		echo $this->Form->input('cencusnome', array('label' => 'Nome'));
		echo $this->Form->input("cencusempresa" ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresa));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
