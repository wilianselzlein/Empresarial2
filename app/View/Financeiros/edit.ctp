<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'javascript.php'; ?>
<div class="financeiros form">
<?php echo $this->Form->create('Financeiro'); $tipo = array(1 => 'Receber', 2 => 'Pagar'); ?>
	<fieldset>
		<legend><?php echo __('Editar Financeiro'); ?></legend>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('fintipo', array('type' => 'select', 'label' => 'Tipo', 'options' => $tipo)); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finempresa' ,array('type' => 'select', 'label' => 'Empresa','options'=>$empresas)); //echo $this->Form->input('finold'); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('fincliente' ,array('type' => 'select', 'label' => 'Cliente','options'=>$clientes));?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('findcto1', array('label' => 'Documento'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('findcto2', array('label' => 'Referenciado'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('finparcela', array('label' => 'Parcela', 'dateFormat' => 'DMY'));?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finemissao', array('label' => 'Emissão', 'dateFormat' => 'DMY')); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finvcto', array('label' => 'Vencimento', 'dateFormat' => 'DMY')); ?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px">		
			<?php echo $this->Form->input('finvalor', array('label' => 'Valor'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('findesccomercial', array('label' => 'Desc. Comercial'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px">
			<?php echo $this->Form->input('finnossonum', array('label' => 'Nosso Núm.'));?>
		    </td>
		</tr>
		</table>
		<table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('fintipocob' ,array('type' => 'select', 'label' => 'Tipo de Cobrança','options'=>$tipocobs)); ?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finsubgrupofin' ,array('type' => 'select', 'label' => 'Subgrupo Fin.','options'=>$subgrupofins)); ?>
		    </td>
		</tr>
		</table>			
		<?php //echo $this->Form->input('finsituacao', array('label' => 'Situação'));
		//echo $this->Form->input('finvalorpago', array('label' => 'Valor Pago'));
		//echo $this->Form->input('findesconto', array('label' => 'Desconto'));
		//echo $this->Form->input('finacrescimo', array('label' => 'Acréscimo'));
		//echo $this->Form->input('fintaxa', array('label' => 'Taxa'));
		//echo $this->Form->input('finliquido', array('label' => 'Líquido'));
		echo $this->Form->input('finobs', array('label' => 'Observação'));
		//echo $this->Form->input('finobs2', array('label' => 'Observação 2'));?>
        <table id="mytablepc" border="0" style="width: 350px" cellpadding="0" cellspacing="0">
            <?php foreach ($financeiroplanocontas as $pc): 
                $i = $pc['FinanceiroPlanoConta']['finpcid']; ?>
	    <tr id="pc<?php echo $i?>">
		<td width="65%"><?php echo $this->Form->input('unusedpc.finpcplanoconta', array('type' => 'select', 'label' => 'Plano de Conta', 'options' => $planocontas, 'value' => $pc['FinanceiroPlanoConta']['finpcplanoconta'])); ?></td>
		<td><?php echo $this->Form->input('unusedpc.finpcvalor', array('type' => 'number', 'label' => 'Valor', 'value' => $pc['FinanceiroPlanoConta']['finpcvalor'])); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Plano de Conta', 'onClick' => 'removePC('.$i.')')) ?></td>
	    </tr>
            <?php endforeach; ?>
            <tr id="pc0" style="display:none;">
		<td width="65%"><?php echo $this->Form->input('unusedpc.finpcplanoconta', array('type' => 'select', 'label' => 'Plano de Conta', 'options' => $planocontas)); ?></td>
		<td><?php echo $this->Form->input('unusedpc.finpcvalor', array('type' => 'number', 'label' => 'Valor')); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Plano de Conta')) ?></td>
	    </tr>
	    <tr id="trAddpc" >
		<td colspan="2">
		    <?php echo $this->Form->button('Adicionar Plano de Conta',array('type'=>'button','title'=>'Adicionar Plano de Conta','onclick'=>'addPC()'));?>
		</td>
	    </tr>            
	</table>
	<table id="mytablecc" border="0" style="width: 350px" cellpadding="0" cellspacing="0">
	    <?php foreach ($financeirocentrocustos as $cc): 
                $i = $cc['FinanceiroCentroCusto']['finccid']; ?>
            <tr id="cc<?php echo $i?>"> 
		<td width="65%"><?php echo $this->Form->input('unusedcc.fincccentrocusto', array('type' => 'select', 'label' => 'Centro de Custo', 'options' => $centrocustos, 'value' => $cc['FinanceiroCentroCusto']['fincccentrocusto'])); ?></td>
		<td><?php echo $this->Form->input('unusedcc.finccvalor', array('type' => 'number', 'label' => 'Valor', 'value' => $cc['FinanceiroCentroCusto']['finccvalor'])); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Centro de Custo', 'onClick' => 'removeCC('.$i.')')) ?></td>
	    </tr>
	    <tr id="cc0" style="display:none;"> 
		<td width="65%"><?php echo $this->Form->input('unusedcc.fincccentrocusto', array('type' => 'select', 'label' => 'Centro de Custo', 'options' => $centrocustos)); ?></td>
		<td><?php echo $this->Form->input('unusedcc.finccvalor', array('type' => 'number', 'label' => 'Valor')); ?></td>
		<td><br/><?php echo $this->Html->image('minus.png', array('alt' => 'Remover Centro de Custo')) ?></td>
	    </tr>            
            <?php endforeach; ?>
	    <tr id="trAddcc" >
		<td colspan="2">
		    <?php echo $this->Form->button('Adicionar Centro de Custo',array('type'=>'button','title'=>'Adicionar Centro de Custo','onclick'=>'addCC()'));?>
		</td>
	    </tr>
	</table>

	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Financeiro.finregistro')), null, __('Deseja excluir# %s?', $this->Form->value('Financeiro.finregistro'))); ?></li>	
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos de Cob.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Tipo de Cob.'), array('controller' => 'tipocobs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Subgrupo Fin.'), array('controller' => 'subgrupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script type='text/javascript'>
	var lastRowcc=0;
	var lastRowpc=0;

	function addCC() {
		lastRowcc++;
		$("#mytablecc tbody>tr:#cc0").clone(true).attr('id','cc'+lastRowcc).removeAttr('style').insertBefore("#mytablecc tbody>tr:#trAddcc");
		$("#cc"+lastRowcc+" img").attr('onclick','removeCC('+lastRowcc+')');
		$("#cc"+lastRowcc+" select").attr('name','data[CentroCusto]['+lastRowcc+'][fincccentrocusto]').attr('id','CentroCustocencuscodigo'+lastRowcc);
		$("#cc"+lastRowcc+" input").attr('name','data[CentroCusto]['+lastRowcc+'][finccvalor]').attr('id','CentroCustofinccvalor'+lastRowcc);
	}

	function removeCC(x) {
		$("#cc"+x).remove();
	}

	function addPC() {
		lastRowpc++;
		$("#mytablepc tbody>tr:#pc0").clone(true).attr('id','pc'+lastRowpc).removeAttr('style').insertBefore("#mytablepc tbody>tr:#trAddpc");
		$("#pc"+lastRowpc+" img").attr('onclick','removePC('+lastRowpc+')');
		$("#pc"+lastRowpc+" select").attr('name','data[PlanoConta]['+lastRowpc+'][finpcplanoconta]').attr('id','PlanoContaplaconcodigo'+lastRowpc);
		$("#pc"+lastRowpc+" input").attr('name','data[PlanoConta]['+lastRowpc+'][finpcvalor]').attr('id','PlanoContafinpcvalor'+lastRowpc);
	}

	function removePC(x) {
		$("#pc"+x).remove();
	}
</script>
