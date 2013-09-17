<div class="financeiropgtos index">
	<h2><?php echo __('Pagamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('finpgregistro', 'Registro'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgpgto', 'Pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgtipo', 'Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgdata', 'Data'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgvalorpago', 'Valor'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgdesconto', 'Desconto'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgacrescimo', 'Acréscimo'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgtaxa', 'Taxa'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgliquido', 'Líquido'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgtipocob', 'Tipo de Cob.'); ?></th>
			<th><?php echo $this->Paginator->sort('finpgconta', 'Conta'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($financeiropgtos as $financeiropgto): ?>
	<tr>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgregistro']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgpgto']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgtipo']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgdata']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgvalorpago']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgdesconto']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgacrescimo']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgtaxa']); ?>&nbsp;</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgliquido']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeiropgto['Tipocob']['tipcobnome'], array('controller' => 'tipocobs', 'action' => 'view', $financeiropgto['Tipocob']['tipcobcodigo'])); ?>
		</td>
		<td><?php echo h($financeiropgto['Financeiropgto']['finpgconta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $financeiropgto['Financeiropgto']['finpgid'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $financeiropgto['Financeiropgto']['finpgid'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $financeiropgto['Financeiropgto']['finpgid']), null, __('Deseja excluir# %s?', $financeiropgto['Financeiropgto']['finpgid'])); ?>
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
		<li><?php echo $this->Html->link(__('Listar Tipo de Cobs.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
	</ul>
</div>
