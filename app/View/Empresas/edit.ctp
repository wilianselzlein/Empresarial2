<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="empresas form">
<?php echo $this->Form->create('Empresa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Empresa'); ?></legend>
	<?php
		echo $this->Form->input('empcodigo', array('label' => 'Código'));
		echo $this->Form->input('empnome', array('label' => 'Nome'));
		echo $this->Form->input('empendereco', array('label' => 'Endereço'));
		echo $this->Form->input('empbairro', array('label' => 'Bairro'));
		echo $this->Form->input("empcidade" ,array('type' => 'select', 'label' => 'Cidade','options'=>$cidades));
		echo $this->Form->input('empcep', array('label' => 'CEP', 'id' => 'cep'));
		echo $this->Form->input('empfone', array('label' => 'Fone'));
		echo $this->Form->input('empfax', array('label' => 'Fax'));
		echo $this->Form->input('empemail', array('label' => 'Email'));
		echo $this->Form->input('emphomepage', array('label' => 'Site'));
		echo $this->Form->input('empcnpj', array('label' => 'CNPJ', 'id' => 'cnpj'));
		echo $this->Form->input('empcpf', array('label' => 'CPF', 'id' => 'cpf'));
		echo $this->Form->input('empie', array('label' => 'IE'));
		echo $this->Form->input('empim', array('label' => 'IM'));
		echo $this->Form->input('emprg', array('label' => 'RG'));
		echo $this->Form->input('emporgaoexprg', array('label' => 'Orgão Exp.'));
		echo $this->Form->input('empdataemprg', array('label' => 'Data Exp.', 'dateFormat' => 'DMY'));
		echo $this->Form->input('empcontato', array('label' => 'Contato'));
		echo $this->Form->input('empcontador', array('label' => 'Contador'));
		echo $this->Form->input('empcrccontador', array('label' => 'CRC Contador'));
		echo $this->Form->input('emptitular', array('label' => 'Titular'));
		echo $this->Form->input('empcargotitular', array('label' => 'Cargo Titular'));
		echo $this->Form->input('empcpftitular', array('label' => 'CPF Titular', 'id' => 'cpf'));
		echo $this->Form->input('empregjunta', array('label' => 'Reg. Junta'));
		echo $this->Form->input('empdataregjunta', array('label' => 'Data Reg. Junta', 'dateFormat' => 'DMY'));
		echo $this->Form->input('empobs', array('label' => 'Observação'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Empresa.empcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Empresa.empcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
