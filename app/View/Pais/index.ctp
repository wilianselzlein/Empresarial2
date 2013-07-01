<div class="pais index">
	<h2><?php echo __('Países'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('paicodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('painome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('paiddi', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('paicodigobacen', 'Código Bacen'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pais as $pai): ?>
	<tr>
		<td><?php echo h($pai['Pai']['paicodigo']); ?>&nbsp;</td>
		<td><?php echo h($pai['Pai']['painome']); ?>&nbsp;</td>
		<td><?php echo h($pai['Pai']['paiddi']); ?>&nbsp;</td>
		<td><?php echo h($pai['Pai']['paicodigobacen']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pai['Pai']['paicodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pai['Pai']['paicodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pai['Pai']['paicodigo']), null, __('Are you sure you want to delete # %s?', $pai['Pai']['paicodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?></li>
	</ul>
</div>
