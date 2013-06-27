<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('clicodigo'); ?></th>
			<th><?php echo $this->Paginator->sort(' clidatacad'); ?></th>
			<th><?php echo $this->Paginator->sort('clipessoa'); ?></th>
			<th><?php echo $this->Paginator->sort('clirazao'); ?></th>
			<th><?php echo $this->Paginator->sort('clifantasia'); ?></th>
			<th><?php echo $this->Paginator->sort('cliendereco'); ?></th>
			<th><?php echo $this->Paginator->sort('clibairro'); ?></th>
			<th><?php echo $this->Paginator->sort('clicomplemento'); ?></th>
			<th><?php echo $this->Paginator->sort('clinumero'); ?></th>
			<th><?php echo $this->Paginator->sort('clicidade'); ?></th>
			<th><?php echo $this->Paginator->sort('clicep'); ?></th>
			<th><?php echo $this->Paginator->sort('clicxpostal'); ?></th>
			<th><?php echo $this->Paginator->sort('clifone'); ?></th>
			<th><?php echo $this->Paginator->sort('clifax'); ?></th>
			<th><?php echo $this->Paginator->sort('clicelular'); ?></th>
			<th><?php echo $this->Paginator->sort('cliemail'); ?></th>
			<th><?php echo $this->Paginator->sort('cliemailalt'); ?></th>
			<th><?php echo $this->Paginator->sort('clihomepage'); ?></th>
			<th><?php echo $this->Paginator->sort('clicontatofin'); ?></th>
			<th><?php echo $this->Paginator->sort('clicnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('clicpf'); ?></th>
			<th><?php echo $this->Paginator->sort('cliie'); ?></th>
			<th><?php echo $this->Paginator->sort('cligrupo'); ?></th>
			<th><?php echo $this->Paginator->sort('clisituacao'); ?></th>
			<th><?php echo $this->Paginator->sort('clidatanasc'); ?></th>
			<th><?php echo $this->Paginator->sort('clinaturalidade'); ?></th>
			<th><?php echo $this->Paginator->sort('clipai'); ?></th>
			<th><?php echo $this->Paginator->sort('climae'); ?></th>
			<th><?php echo $this->Paginator->sort('clirg'); ?></th>
			<th><?php echo $this->Paginator->sort('cliorgaoexprg'); ?></th>
			<th><?php echo $this->Paginator->sort('clidataexprg'); ?></th>
			<th><?php echo $this->Paginator->sort('cliobs'); ?></th>
			<th><?php echo $this->Paginator->sort('cliformapgto'); ?></th>
			<th><?php echo $this->Paginator->sort('clidiafatura'); ?></th>
			<th><?php echo $this->Paginator->sort('cliim'); ?></th>
			<th><?php echo $this->Paginator->sort('clitipcob'); ?></th>
			<th><?php echo $this->Paginator->sort('cliopcaocad'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['clicodigo']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente'][' clidatacad']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clipessoa']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clirazao']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifantasia']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliendereco']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clibairro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicomplemento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clinumero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clicep']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicxpostal']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifax']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicelular']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliemail']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliemailalt']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clihomepage']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicontatofin']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicnpj']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicpf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliie']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cligrupo']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clisituacao']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clidatanasc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Naturalidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Naturalidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clipai']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['climae']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clirg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliorgaoexprg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clidataexprg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliobs']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliformapgto']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clidiafatura']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliim']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clitipcob']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliopcaocad']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['clicodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['clicodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['clicodigo']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['clicodigo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
