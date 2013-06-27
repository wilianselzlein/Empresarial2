<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input(' clidatacad');
		echo $this->Form->input('clipessoa');
		echo $this->Form->input('clirazao');
		echo $this->Form->input('clifantasia');
		echo $this->Form->input('cliendereco');
		echo $this->Form->input('clibairro');
		echo $this->Form->input('clicomplemento');
		echo $this->Form->input('clinumero');
		echo $this->Form->input('clicidade');
		echo $this->Form->input('clicep');
		echo $this->Form->input('clicxpostal');
		echo $this->Form->input('clifone');
		echo $this->Form->input('clifax');
		echo $this->Form->input('clicelular');
		echo $this->Form->input('cliemail');
		echo $this->Form->input('cliemailalt');
		echo $this->Form->input('clihomepage');
		echo $this->Form->input('clicontatofin');
		echo $this->Form->input('clicnpj');
		echo $this->Form->input('clicpf');
		echo $this->Form->input('cliie');
		echo $this->Form->input('cligrupo');
		echo $this->Form->input('clisituacao');
		echo $this->Form->input('clidatanasc');
		echo $this->Form->input('clinaturalidade');
		echo $this->Form->input('clipai');
		echo $this->Form->input('climae');
		echo $this->Form->input('clirg');
		echo $this->Form->input('cliorgaoexprg');
		echo $this->Form->input('clidataexprg');
		echo $this->Form->input('cliobs');
		echo $this->Form->input('cliformapgto');
		echo $this->Form->input('clidiafatura');
		echo $this->Form->input('cliim');
		echo $this->Form->input('clitipcob');
		echo $this->Form->input('cliopcaocad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
