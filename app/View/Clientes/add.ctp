<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		//echo $this->Form->input('clidatacad');
		echo $this->Form->input('clipessoa', array('label' => 'Pessoa F/J'));
		echo $this->Form->input('clirazao', array('label' => 'Razao Social'));
		echo $this->Form->input('clifantasia', array('label' => 'Fantaisa'));
		echo $this->Form->input('cliendereco', array('label' => 'Endereço'));
		echo $this->Form->input('clibairro', array('label' => 'Bairro'));
		echo $this->Form->input('clicomplemento', array('label' => 'Complemento'));
		echo $this->Form->input('clinumero', array('label' => 'Número'));
		echo $this->Form->input('clicidade' ,array('type' => 'select', 'label' => 'Cidade','options'=>$cidades));
		echo $this->Form->input('clicep', array('label' => 'CEP', 'id' => 'cep'));
		echo $this->Form->input('clicxpostal', array('label' => 'Cx Postal'));
		echo $this->Form->input('clifone', array('label' => 'Fone'));
		echo $this->Form->input('clifax', array('label' => 'Fax'));
		echo $this->Form->input('clicelular', array('label' => 'Celular'));
		echo $this->Form->input('cliemail', array('label' => 'Email'));
		echo $this->Form->input('cliemailalt', array('label' => 'Email Alt'));
		echo $this->Form->input('clihomepage', array('label' => 'Site'));
		echo $this->Form->input('clicontatofin', array('label' => 'Contato Fin'));
		echo $this->Form->input('clicnpj', array('label' => 'CNPJ', 'id' => 'cnpj'));
		echo $this->Form->input('clicpf', array('label' => 'CPF', 'id' => 'cpf'));
		echo $this->Form->input('cliie', array('label' => 'Inscrição Estadual'));
		echo $this->Form->input('cligrupo' ,array('type' => 'select', 'label' => 'Grupo','options'=>$grupos));
		echo $this->Form->input('clisituacao', array('label' => 'Situação (A)tivo = (I)nativo'));
		echo $this->Form->input('clidatanasc', array('label' => 'Data Nascimento', 'dateFormat' => 'DMY'));
		echo $this->Form->input('clinaturalidade' ,array('type' => 'select', 'label' => 'Naturalidade','options'=>$naturalidades));
		echo $this->Form->input('clipai', array('label' => 'Nome do Pai'));
		echo $this->Form->input('climae', array('label' => 'Nome da Mãe'));
		echo $this->Form->input('clirg', array('label' => 'RG'));
		echo $this->Form->input('cliorgaoexprg', array('label' => 'Orgão Expedidot'));
		echo $this->Form->input('clidataexprg', array('label' => 'Data Experdição', 'dateFormat' => 'DMY'));
		echo $this->Form->input('cliobs', array('label' => 'Observação'));
		echo $this->Form->input('cliformapgto' ,array('type' => 'select', 'label' => 'Forma de Pagamento','options'=>$formapgtos));
		echo $this->Form->input('clidiafatura', array('label' => 'Dia da Fatura'));
		echo $this->Form->input('cliim', array('label' => 'Inscrição Municipal'));
		echo $this->Form->input('clitipcob' ,array('type' => 'select', 'label' => 'Tipo de Cobrança','options'=>$tipocobs));
		//echo $this->Form->input('cliopcaocad', array('label' => ''));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
