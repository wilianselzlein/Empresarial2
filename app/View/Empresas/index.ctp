<div class="empresas index">
	<h2><?php echo __('Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empcodigo'); ?></th>
			<th><?php echo $this->Paginator->sort('empnome'); ?></th>
			<th><?php echo $this->Paginator->sort('empendereco'); ?></th>
			<th><?php echo $this->Paginator->sort('empbairro'); ?></th>
			<th><?php echo $this->Paginator->sort('empcidade'); ?></th>
			<th><?php echo $this->Paginator->sort('empcep'); ?></th>
			<th><?php echo $this->Paginator->sort('empfone'); ?></th>
			<th><?php echo $this->Paginator->sort('empfax'); ?></th>
			<th><?php echo $this->Paginator->sort('empemail'); ?></th>
			<th><?php echo $this->Paginator->sort('emphomepage'); ?></th>
			<th><?php echo $this->Paginator->sort('empcnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('empcpf'); ?></th>
			<th><?php echo $this->Paginator->sort('empie'); ?></th>
			<th><?php echo $this->Paginator->sort('empim'); ?></th>
			<th><?php echo $this->Paginator->sort('emprg'); ?></th>
			<th><?php echo $this->Paginator->sort('emporgaoexprg'); ?></th>
			<th><?php echo $this->Paginator->sort('empdataemprg'); ?></th>
			<th><?php echo $this->Paginator->sort('empcontato'); ?></th>
			<th><?php echo $this->Paginator->sort('empcontador'); ?></th>
			<th><?php echo $this->Paginator->sort('empcrccontador'); ?></th>
			<th><?php echo $this->Paginator->sort('emptitular'); ?></th>
			<th><?php echo $this->Paginator->sort('empcargotitular'); ?></th>
			<th><?php echo $this->Paginator->sort('empcpftitular'); ?></th>
			<th><?php echo $this->Paginator->sort('empregjunta'); ?></th>
			<th><?php echo $this->Paginator->sort('empdataregjunta'); ?></th>
			<th><?php echo $this->Paginator->sort('empobs'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['empcodigo']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empnome']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empendereco']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empbairro']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresa['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($empresa['Empresa']['empcep']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empfone']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empfax']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empemail']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emphomepage']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcnpj']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcpf']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empie']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empim']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emporgaoexprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empdataemprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcontato']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcontador']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcrccontador']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emptitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcargotitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcpftitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empregjunta']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empdataregjunta']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empobs']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresa['Empresa']['empcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['empcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['empcodigo']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['empcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
