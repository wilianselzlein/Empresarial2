<div class="caixalctos form">
<?php echo $this->Form->create('Caixalcto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Lançamento no Caixa'); ?></legend>
	<?php
		//echo $this->Form->input('cailctitem');
		echo $this->Form->input('cailctdcto', array('label' => 'Documento'));
		echo $this->Form->input('cailctoperacao', array('type' => 'select', 'label' => 'Operação','options'=> array('E' => 'Entrada', 'S' => 'Saída')));
		echo $this->Form->input('cailctvalor', array('label' => 'Valor'));
		echo $this->Form->input('cailctformapgto', array('type' => 'select', 'label' => 'Forma de Pgto','options' => $formapgtos));
		echo $this->Form->input('cailcthistorico', array('label' => 'Histórico'));
		echo $this->Form->input('cailctdata', array('label' => 'Data', 'dateFormat' => 'DMY'));
		echo $this->Form->input('cailcthora', array('label' => 'Hora', 'timeFormat' => 24));
		//echo $this->Form->input('cailctprograma');
		//echo $this->Form->input('cailctold');
		//echo $this->Form->input('cailctdcto2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Caixalcto.cailctcodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Caixalcto.cailctcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Formas de Pgtos'), array('controller' => 'formapgtos', 'action' => 'index')); ?> </li>
	</ul>
</div>
