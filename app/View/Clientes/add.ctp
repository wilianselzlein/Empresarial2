<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Novo Cliente'); ?></legend>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php $tipo = array('F' => 'Física', 'J' => 'Jurídica');	
                        echo $this->Form->input('clipessoa', array('type' => 'select', 'label' => 'Pessoa F/J', 'options' => $tipo)); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clirazao', array('label' => 'Razao Social')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clifantasia', array('label' => 'Fantasia')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliendereco', array('label' => 'Endereço')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clibairro', array('label' => 'Bairro')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicomplemento', array('label' => 'Complemento')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clinumero', array('label' => 'Número')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicidade' ,array('type' => 'select', 'label' => 'Cidade','options'=>$cidades)); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicep', array('label' => 'CEP', 'id' => 'cep')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicxpostal', array('label' => 'Cx Postal')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clifone', array('label' => 'Fone')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clifax', array('label' => 'Fax')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicelular', array('label' => 'Celular')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliemail', array('label' => 'Email')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliemailalt', array('label' => 'Email Alt')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clihomepage', array('label' => 'Site')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
                        <?php echo $this->Form->input('clicontatofin', array('label' => 'Contato Fin')); ?>	
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicnpj', array('label' => 'CNPJ', 'id' => 'cnpj')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clicpf', array('label' => 'CPF', 'id' => 'cpf')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliie', array('label' => 'Inscrição Estadual')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cligrupo' ,array('type' => 'select', 'label' => 'Grupo','options'=>$grupos)); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
                        <?php $sit = array('A' => 'Ativo', 'I' => 'Inativo');	
                        echo $this->Form->input('clisituacao', array('type' => 'select', 'label' => 'Situação', 'options' => $sit)); 
                        //echo $this->Form->input('clisituacao', array('label' => 'Situação (A)tivo = (I)nativo'));?>			
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
                        <?php echo $this->Form->input('clidatanasc', array('label' => 'Data Nascimento', 'dateFormat' => 'DMY')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clinaturalidade' ,array('type' => 'select', 'label' => 'Naturalidade','options'=>$naturalidades)); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clipai', array('label' => 'Nome do Pai')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('climae', array('label' => 'Nome da Mãe')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clirg', array('label' => 'RG')); ?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliorgaoexprg', array('label' => 'Orgão Expedidot')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clidataexprg', array('label' => 'Data Experdição', 'dateFormat' => 'DMY')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
                        <?php echo $this->Form->input('clitipcob' ,array('type' => 'select', 'label' => 'Tipo de Cobrança','options'=>$tipocobs)); ?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('cliformapgto' ,array('type' => 'select', 'label' => 'Forma de Pagamento','options'=>$formapgtos)); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->input('clidiafatura', array('label' => 'Dia da Fatura', 'value' => '1')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
                        <?php echo $this->Form->input('cliim', array('label' => 'Inscrição Municipal')); ?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
                    <td style="padding: 0px; border-bottom:0px" width="66%" colspan="2">
			<?php echo $this->Form->input('cliobs', array('label' => 'Observação')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="33%">
			<?php echo $this->Form->end(__('Salvar')); ?>
		    </td>
		</tr>
                </table>
	</fieldset>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
