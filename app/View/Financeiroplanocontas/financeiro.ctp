<article>
<table cellpadding="0" cellspacing="0">
	<tr>
	    <th>Plano Conta</th>
	    <th>Valor</th>
	    <th>%</th>
	</tr>
	<?php foreach($financeiroplanocontas as $Financeiroplanoconta): ?>
	<tr>
	    <td>
		<?php echo $this->Html->link($Financeiroplanoconta['PlanoConta']['planome'], array('controller' => 'planoconta', 'action' => 'view', $Financeiroplanoconta['Financeiroplanoconta']['finpcplanoconta'])); ?>
	    </td>
	    <td><?php echo h($Financeiroplanoconta['Financeiroplanoconta']['finpcvalor']); ?>&nbsp;</td>
	    <td><?php echo h($Financeiroplanoconta['Financeiroplanoconta']['finpcpercentual']); ?>&nbsp;</td>
	    <!--<td class="actions">
		<?php //echo $this->Html->link(__('Visualizar'), array('action' => 'view', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
		<?php //echo $this->Html->link(__('Editar'), array('action' => 'edit', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
		<?php //echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $candidatoFuncao['CandidatoFuncao']['id']), null, __('Tem certeza que deseja deletar # %s?', $candidatoFuncao['CandidatoFuncao']['id'])); ?>
	    </td>-->
	</tr>
	<?php endforeach; ?>
</article>