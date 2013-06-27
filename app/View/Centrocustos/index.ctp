<div class="centrocustos index">
	<h2><?php echo __('Centrocustos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cencuscodigo'); ?></th>
			<th><?php echo $this->Paginator->sort('cencusanalitico'); ?></th>
			<th><?php echo $this->Paginator->sort('cencusnome'); ?></th>
			<th><?php echo $this->Paginator->sort('cencusempresa'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($centrocustos as $centrocusto): ?>
	<tr>
		<td><?php echo h($centrocusto['Centrocusto']['cencuscodigo']); ?>&nbsp;</td>
		<td><?php echo h($centrocusto['Centrocusto']['cencusanalitico']); ?>&nbsp;</td>
		<td><?php echo h($centrocusto['Centrocusto']['cencusnome']); ?>&nbsp;</td>
		<td><?php echo h($centrocusto['Centrocusto']['cencusempresa']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $centrocusto['Centrocusto']['cencuscodigo']), null, __('Are you sure you want to delete # %s?', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Centrocusto'), array('action' => 'add')); ?></li>
	</ul>
</div>
