<div class="financeirocentrocustos index">
	<h2><?php echo __('Financeirocentrocustos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('finccregistro'); ?></th>
			<th><?php echo $this->Paginator->sort('fincccentrocusto'); ?></th>
			<th><?php echo $this->Paginator->sort('finccvalor'); ?></th>
			<th><?php echo $this->Paginator->sort('finccpercentual'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($financeirocentrocustos as $financeirocentrocusto): ?>
	<tr>
		<td><?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccregistro']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financeirocentrocusto['CentroCusto']['cencusnome'], array('controller' => 'centro_custos', 'action' => 'view', $financeirocentrocusto['CentroCusto']['cencuscodigo'])); ?>
		</td>
		<td><?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccvalor']); ?>&nbsp;</td>
		<td><?php echo h($financeirocentrocusto['Financeirocentrocusto']['finccpercentual']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financeirocentrocusto['Financeirocentrocusto']['finccregistro'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financeirocentrocusto['Financeirocentrocusto']['finccregistro'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financeirocentrocusto['Financeirocentrocusto']['finccregistro']), null, __('Are you sure you want to delete # %s?', $financeirocentrocusto['Financeirocentrocusto']['finccregistro'])); ?>
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
		<li><?php echo $this->Html->link(__('New Financeirocentrocusto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Centro Custos'), array('controller' => 'centro_custos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centro Custo'), array('controller' => 'centro_custos', 'action' => 'add')); ?> </li>
	</ul>
</div>
