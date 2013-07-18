<article>
<table cellpadding="0" cellspacing="0">
	<tr>
	    <th>Centro Custo</th>
	    <th>Valor</th>
	    <th>%</th>
	</tr>
	<?php foreach($financeirocentrocustos as $Financeirocentrocusto): ?>
	<tr>
	    <td>
		<?php echo $this->Html->link($Financeirocentrocusto['CentroCusto']['cencusnome'], array('controller' => 'centrocustos', 'action' => 'view', $Financeirocentrocusto['Financeirocentrocusto']['fincccentrocusto'])); ?>
	    </td>
	    <td><?php echo h($Financeirocentrocusto['Financeirocentrocusto']['finccvalor']); ?>&nbsp;</td>
	    <td><?php echo h($Financeirocentrocusto['Financeirocentrocusto']['finccpercentual']); ?>&nbsp;</td>
	    <!--<td class="actions">
		<?php //echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
		<?php //echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
		<?php //echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidatoFuncao['CandidatoFuncao']['id']), null, __('Tem certeza que deseja deletar # %s?', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
	    </td>-->
	</tr>
	<?php endforeach; ?>
</article>