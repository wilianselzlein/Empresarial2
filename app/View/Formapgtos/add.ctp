<div class="formapgtos form">
<?php echo $this->Form->create('Formapgto'); ?>
	<fieldset>
		<legend><?php echo __('Add Formapgto'); ?></legend>
	<?php
		echo $this->Form->input('fornome', array('label' => 'Nome'));
		echo $this->Form->input('fortipo', array('label' => 'Tipo (1)À Vista - (2)À Prazo'));
		echo $this->Form->input('formesdia', array('label' => 'Dia do Faturamento'));
		echo $this->Form->input('forprazofixo', array('label' => 'Prazo Fixo (Informe o número de parcelas desejada)'));
		echo $this->Form->input('forsigla', array('label' => 'Sigla'));
		echo $this->Form->input('forsituacao', array('label' => 'Situação (A)tivo (I)nativo'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formapgtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
