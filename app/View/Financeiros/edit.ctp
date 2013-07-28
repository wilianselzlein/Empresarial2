<div class="financeiros form">
<?php echo $this->Form->create('Financeiro'); ?>
	<fieldset>
		<legend><?php echo __('Edit Financeiro'); ?></legend>
	<?php
		$tipo = array(1 => 'Receber', 2 => 'Pagar');	
		echo $this->Form->input('fintipo', array('type' => 'select', 'label' => 'Tipo', 'options' => $tipo));
		echo $this->Form->input('finempresa' ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresas));
		//echo $this->Form->input('finold');
		echo $this->Form->input('fincliente' ,array('type' => 'select', 'label' => 'Cliente','options'=>$clientes));
		echo $this->Form->input('findcto1', array('label' => 'Documento'));
		echo $this->Form->input('findcto2', array('label' => 'Referenciado'));
		echo $this->Form->input('finparcela', array('label' => 'Parcela', 'value' => '1'));
		echo $this->Form->input('finemissao', array('label' => 'Emissão'));
		echo $this->Form->input('finvcto', array('label' => 'Vencimento'));
		echo $this->Form->input('finprevvcto', array('label' => 'Previsão de Vencimento'));
		echo $this->Form->input('finvalor', array('label' => 'Valor', 'value' => '0'));
		echo $this->Form->input('findesccomercial', array('label' => 'Desc. Comercial', 'value' => '0'));
		echo $this->Form->input('fintipocob' ,array('type' => 'select', 'label' => 'Tipo de Cobrança','options'=>$tipocobs));
		echo $this->Form->input('finsubgrupofin' ,array('type' => 'select', 'label' => 'Subgrupo Fin.','options'=>$subgrupofins));
		echo $this->Form->input('finnossonum', array('label' => 'Nosso Núm.'));
		//echo $this->Form->input('finsituacao', array('label' => 'Situação'));
		echo $this->Form->input('finfaturamento', array('label' => 'Faturamento'));
		echo $this->Form->input('findataprotesto', array('label' => 'Data Protesto'));
		//echo $this->Form->input('finvalorpago', array('label' => 'Valor Pago'));
		//echo $this->Form->input('findesconto', array('label' => 'Desconto'));
		//echo $this->Form->input('finacrescimo', array('label' => 'Acréscimo'));
		//echo $this->Form->input('fintaxa', array('label' => 'Taxa'));
		//echo $this->Form->input('finliquido', array('label' => 'Líquido'));
		echo $this->Form->input('finobs', array('label' => 'Observação'));
		//echo $this->Form->input('finobs2', array('label' => 'Observação 2'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Financeiro.finregistro')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Financeiro.finregistro'))); ?></li>	
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos de Cob.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo de Cob.'), array('controller' => 'tipocobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
