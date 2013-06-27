<div class="tipocobs index">
	<h2><?php echo __('Tipocobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tipcobcodigo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipcobnome'); ?></th>
			<th><?php echo $this->Paginator->sort('tipcobsituacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipocobs as $tipocob): ?>
	<tr>
		<td><?php echo h($tipocob['Tipocob']['tipcobcodigo']); ?>&nbsp;</td>
		<td><?php echo h($tipocob['Tipocob']['tipcobnome']); ?>&nbsp;</td>
		<td><?php echo h($tipocob['Tipocob']['tipcobsituacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipocob['Tipocob']['tipcobcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipocob['Tipocob']['tipcobcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipocob['Tipocob']['tipcobcodigo']), null, __('Are you sure you want to delete # %s?', $tipocob['Tipocob']['tipcobcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipocob'), array('action' => 'add')); ?></li>
	</ul>
</div>
