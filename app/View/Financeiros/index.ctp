<div class="financeiros index">
	<h2><?php echo __('Financeiro'); ?></h2>
        <?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros.php'; ?>
	<?php echo $this->html->script("jquery", array('inline'=>false)); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('finregistro', 'Registro'); ?></th>
			<th>CC</th>
			<th>PC</th>
			<th><?php echo $this->Paginator->sort('fintipo', 'Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('finempresa', 'Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('fincliente', 'Cliente'); ?></th>
			<th><?php echo $this->Paginator->sort('findcto1', 'Documento'); ?></th>
			<th><?php echo $this->Paginator->sort('findcto2', 'Relacional'); ?></th>
			<th><?php echo $this->Paginator->sort('finparcela', 'Parcela'); ?></th>
			<th><?php echo $this->Paginator->sort('finemissao', 'Emissão'); ?></th>
			<th><?php echo $this->Paginator->sort('finvcto', 'Vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('finvalor', 'Valor'); ?></th>
			<th><?php echo $this->Paginator->sort('findesccomercial', 'Desc Comercial'); ?></th>
			<th><?php echo $this->Paginator->sort('fintipocob', 'Tipo Cob.'); ?></th>
			<th><?php echo $this->Paginator->sort('finsubgrupofin', 'Subgrupo Fin'); ?></th>
			<th><?php echo $this->Paginator->sort('finnossonum', 'Nosso Num.'); ?></th>
			<th><?php echo $this->Paginator->sort('finsituacao', 'Situação'); ?></th>
			<th><?php echo $this->Paginator->sort('finvalorpago', 'Valor Pago'); ?></th>
			<th><?php echo $this->Paginator->sort('findesconto', 'Desconto'); ?></th>
			<th><?php echo $this->Paginator->sort('finacrescimo', 'Acréscimo'); ?></th>
			<th><?php echo $this->Paginator->sort('fintaxa', 'Taxa'); ?></th>
			<th><?php echo $this->Paginator->sort('finliquido', 'Líquido'); ?></th>
			<th><?php echo $this->Paginator->sort('finobs', 'Obs'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($financeiros as $financeiro): ?>
	<tr>
		<td><?php echo h($financeiro['Financeiro']['finregistro']); ?>&nbsp;</td>
		<td>
		    <h6>
			<?php echo $this->Ajax->link('CC', array('controller' => 'Financeirocentrocustos', 'action' => 'financeiro', $financeiro['Financeiro']['finregistro']), 
			array('update' => 'cc' . $financeiro['Financeiro']['finregistro'], 'indicator' => 'loadingC' . $financeiro['Financeiro']['finregistro']));?>
			<a href="#" onclick="showHide('cc<?php echo h($financeiro['Financeiro']['finregistro']);?>')"><?php echo $this->Html->image('close.png', array('alt' => 'Esconder')); ?></a>
		    </h6>
		    <?php echo $this->Html->image('load.gif', array('id' => 'loadingC' . h($financeiro['Financeiro']['finregistro']), 'style'=> 'display:none')); ?>
		    <p id="cc<?php echo h($financeiro['Financeiro']['finregistro']);?>">
		    </p>
		</td>
		<td>
		    <h6>
			<?php echo $this->Ajax->link('PC', array('controller' => 'Financeiroplanocontas', 'action' => 'financeiro', $financeiro['Financeiro']['finregistro']), 
			array( 'update' => 'pc' . $financeiro['Financeiro']['finregistro'], 'indicator' => 'loadingP' . $financeiro['Financeiro']['finregistro']));?>
			<a href="#" onclick="showHide('pc<?php echo h($financeiro['Financeiro']['finregistro']);?>')"><?php echo $this->Html->image('close.png', array('alt' => 'Esconder')); ?></a>
		    </h6>
		    <?php echo $this->Html->image('load.gif', array('id' => 'loadingP' . h($financeiro['Financeiro']['finregistro']), 'style'=> 'display:none')); ?>
		    <p id="pc<?php echo h($financeiro['Financeiro']['finregistro']);?>">
		    </p>
		</td>		
		<td><?php echo h($financeiro['Financeiro']['fintipo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiro['Empresa']['empnome'], array('controller' => 'empresas', 'action' => 'view', $financeiro['Empresa']['empcodigo'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($financeiro['Cliente']['clifantasia'], array('controller' => 'clientes', 'action' => 'view', $financeiro['Cliente']['clicodigo'])); ?>
		</td>
		<td><?php echo h($financeiro['Financeiro']['findcto1']); ?>&nbsp;</td>
		<td><?php echo h($financeiro['Financeiro']['findcto2']); ?>&nbsp;</td>
		<td><?php echo h($financeiro['Financeiro']['finparcela']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->date($financeiro['Financeiro']['finemissao']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->date($financeiro['Financeiro']['finvcto']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['finvalor'], true); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['findesccomercial']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiro['Tipocob']['tipcobnome'], array('controller' => 'tipocobs', 'action' => 'view', $financeiro['Tipocob']['tipcobcodigo'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($financeiro['Subgrupofin']['subgfnome'], array('controller' => 'subgrupofins', 'action' => 'view', $financeiro['Subgrupofin']['subgfcodigo'])); ?>
		</td>
		<td><?php echo h($financeiro['Financeiro']['finnossonum']); ?>&nbsp;</td>
		<td><?php if ($financeiro['Financeiro']['finsituacao'] == 0) echo 'Aberto'; else echo 'Fechado'; ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['finvalorpago']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['findesconto']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['finacrescimo']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['fintaxa']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($financeiro['Financeiro']['finliquido']); ?>&nbsp;</td>
		<td><?php echo h($financeiro['Financeiro']['finobs']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $financeiro['Financeiro']['finregistro'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $financeiro['Financeiro']['finregistro'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $financeiro['Financeiro']['finregistro']), null, __('Deseja excluir# %s?', $financeiro['Financeiro']['finregistro'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, iniciando no registro {:start}, finalizando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?></li>
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
<script language="Javascript" type="text/javascript">
function showHide (ID) {
    if (document.getElementById(ID).style.display == "none") {
	document.getElementById(ID).style.display= "";
    }
    else {
	document.getElementById(ID).innerHTML = "";
    }
}
</script>