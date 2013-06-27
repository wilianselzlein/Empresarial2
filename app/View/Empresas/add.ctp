<div class="empresas form">
<?php echo $this->Form->create('Empresa'); ?>
	<fieldset>
		<legend><?php echo __('Add Empresa'); ?></legend>
	<?php
		echo $this->Form->input('empnome');
		echo $this->Form->input('empendereco');
		echo $this->Form->input('empbairro');
		echo $this->Form->input('empcidade');
		echo $this->Form->input('empcep');
		echo $this->Form->input('empfone');
		echo $this->Form->input('empfax');
		echo $this->Form->input('empemail');
		echo $this->Form->input('emphomepage');
		echo $this->Form->input('empcnpj');
		echo $this->Form->input('empcpf');
		echo $this->Form->input('empie');
		echo $this->Form->input('empim');
		echo $this->Form->input('emprg');
		echo $this->Form->input('emporgaoexprg');
		echo $this->Form->input('empdataemprg');
		echo $this->Form->input('empcontato');
		echo $this->Form->input('empcontador');
		echo $this->Form->input('empcrccontador');
		echo $this->Form->input('emptitular');
		echo $this->Form->input('empcargotitular');
		echo $this->Form->input('empcpftitular');
		echo $this->Form->input('empregjunta');
		echo $this->Form->input('empdataregjunta');
		echo $this->Form->input('empobs');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
