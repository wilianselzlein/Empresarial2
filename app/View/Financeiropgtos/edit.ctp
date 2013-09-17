<div class="financeiropgtos form">
<?php echo $this->Form->create('Financeiropgto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Financeiropgto'); ?></legend>
	<?php
		echo $this->Form->input('finpgregistro', array('label' => 'Registro'));
		echo $this->Form->input('finpgpgto', array('label' => 'Pagamento'));
		echo $this->Form->input('finpgtipo', array('type' => 'select', 'label' => 'Tipo','options'=> array('P' => 'Parcial', 'Q' => 'Quitar')));
		echo $this->Form->input('finpgdata', array('label' => 'Data', 'dateFormat' => 'DMY'));
		echo $this->Form->input('finpgvalorpago', array('label' => 'Valor'));
		echo $this->Form->input('finpgdesconto', array('label' => 'Desconto'));
		echo $this->Form->input('finpgacrescimo', array('label' => 'Acréscimo'));
		echo $this->Form->input('finpgtaxa', array('label' => 'Taxa'));
		echo $this->Form->input('finpgliquido', array('label' => 'Líquido'));
		echo $this->Form->input('finpgtipocob', array('type' => 'select', 'label' => 'Tipo de Cobs.','options' => $tipocobs));
		echo $this->Form->input('finpgconta', array('label' => 'Conta'));
		echo $this->Form->input('finobs', array('label' => 'Observação'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Financeiropgto.finpgid')), null, __('Deseja excluir# %s?', $this->Form->value('Financeiropgto.finpgid'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Tipos de Cobs'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
	</ul>
</div>
