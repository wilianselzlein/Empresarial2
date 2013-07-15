<?php include DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="financeiros form">
<?php echo $this->Form->create('Financeiro'); ?>
	<fieldset>
		<legend><?php echo __('Add Financeiro'); ?></legend>
	<?php
		echo $this->Form->input('fintipo', array('label' => 'Tipo'));
		echo $this->Form->input('finempresa' ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresas));
		//echo $this->Form->input('finold');
		echo $this->Form->input('fincliente' ,array('type' => 'select', 'label' => 'Cliente','options'=>$clientes));
		echo $this->Form->input('findcto1', array('label' => 'Documento'));
		echo $this->Form->input('findcto2', array('label' => 'Referenciado'));
		echo $this->Form->input('finparcela', array('label' => 'Parcela'));
		echo $this->Form->input('finemissao', array('label' => 'Emissão'));
		echo $this->Form->input('finvcto', array('label' => 'Vencimento'));
		echo $this->Form->input('finprevvcto', array('label' => 'Previsão de Vencimento'));
		echo $this->Form->input('finvalor', array('label' => 'Valor'));
		echo $this->Form->input('findesccomercial', array('label' => 'Desc. Comercial'));
		echo $this->Form->input('fintipocob' ,array('type' => 'select', 'label' => 'Tipo de Cobrança','options'=>$tipocobs));
		echo $this->Form->input('finsubgrupofin' ,array('type' => 'select', 'label' => 'Subgrupo Fin.','options'=>$subgrupofins));
		echo $this->Form->input('finnossonum', array('label' => 'Nosso Núm.'));
		echo $this->Form->input('finsituacao', array('label' => 'Situação'));
		echo $this->Form->input('finvalorpago', array('label' => 'Valor Pago'));
		echo $this->Form->input('findesconto', array('label' => 'Desconto'));
		echo $this->Form->input('finacrescimo', array('label' => 'Acréscimo'));
		echo $this->Form->input('fintaxa', array('label' => 'Taxa'));
		echo $this->Form->input('finliquido', array('label' => 'Líquido'));
		echo $this->Form->input('finobs', array('label' => 'Observação'));
		echo $this->Form->input('finfaturamento', array('label' => 'Faturamento'));
		echo $this->Form->input('findataprotesto', array('label' => 'Data Protesto'));
		echo $this->Form->input('finobs2', array('label' => 'Observação 2'));
	?>
	<!--<table id="mytablecc" border="0" style="width: 350px" cellpadding="0" cellspacing="0">
	    <tr id="cc0" style="display:none;">
		<td width="65%"><?php echo $this->Form->input('unused.fincccentrocusto', array('type' => 'select', 'label' => 'Centro de Custo', 'options' => $centrocustos)); ?></td>
		<td><?php echo $this->Form->input('unused.finccvalor', array('type' => 'number', 'label' => 'Valor')); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Centro de Custo')) ?></td>
	    </tr>
	    <tr id="trAdd" >
		<td colspan="2">
		    <?php echo $this->Form->button('Adicionar Centro de Custo',array('type'=>'button','title'=>'Adicionar Centro de Custo','onclick'=>'addCC()'));?>
		</td>
	    </tr>
	</table>-->
	<table id="mytablepc" border="0" style="width: 350px" cellpadding="0" cellspacing="0">
	    <tr id="pc0" style="display:none;">
		<td width="65%"><?php echo $this->Form->input('unused.finpcplanoconta', array('type' => 'select', 'label' => 'Plano de Conta', 'options' => $planocontas)); ?></td>
		<td><?php echo $this->Form->input('unused.finpcvalor', array('type' => 'number', 'label' => 'Valor')); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Plano de Conta')) ?></td>
	    </tr>
	    <tr id="trAdd" >
		<td colspan="2">
		    <?php echo $this->Form->button('Adicionar Plano de Conta',array('type'=>'button','title'=>'Adicionar Plano de Conta','onclick'=>'addPC()'));?>
		</td>
	    </tr>
	</table>
		
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
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
<script type='text/javascript'>
	var lastRow=0;

	function addCC() {
		lastRow++;
		$("#mytablecc tbody>tr:#cc0").clone(true).attr('id','cc'+lastRow).removeAttr('style').insertBefore("#mytablecc tbody>tr:#trAdd");
		$("#cc"+lastRow+" img").attr('onclick','removeCC('+lastRow+')');
		$("#cc"+lastRow+" select").attr('name','data[CentroCusto]['+lastRow+'][fincccentrocusto]').attr('id','CentroCustocencuscodigo'+lastRow);
		$("#cc"+lastRow+" input").attr('name','data[CentroCusto]['+lastRow+'][finccvalor]').attr('id','CentroCustofinccvalor'+lastRow);
	}

	function removeCC(x) {
		$("#cc"+x).remove();
	}

	function addPC() {
		lastRow++;
		$("#mytablepc tbody>tr:#pc0").clone(true).attr('id','pc'+lastRow).removeAttr('style').insertBefore("#mytablepc tbody>tr:#trAdd");
		$("#pc"+lastRow+" img").attr('onclick','removePC('+lastRow+')');
		$("#pc"+lastRow+" select").attr('name','data[PlanoConta]['+lastRow+'][finpcplanoconta]').attr('id','PlanoContaplaconcodigo'+lastRow);
		$("#pc"+lastRow+" input").attr('name','data[PlanoConta]['+lastRow+'][finpcvalor]').attr('id','PlanoContafinpcvalor'+lastRow);
	}

	function removePC(x) {
		$("#pc"+x).remove();
	}
</script>
