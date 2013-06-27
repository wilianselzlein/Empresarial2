<div class="estados index">
	<h2><?php echo __('Estados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('estcodigo'); ?></th>
			<th><?php echo $this->Paginator->sort('estnome'); ?></th>
			<th><?php echo $this->Paginator->sort('estsigla'); ?></th>
			<th><?php echo $this->Paginator->sort('estpais'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estados as $estado): ?>
	<tr>
		<td><?php echo h($estado['Estado']['estcodigo']); ?>&nbsp;</td>
		<td><?php echo h($estado['Estado']['estnome']); ?>&nbsp;</td>
		<td><?php echo h($estado['Estado']['estsigla']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estado['Pais']['painome'], array('controller' => 'pais', 'action' => 'view', $estado['Estado']['estpais'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estado['Estado']['estcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estado['Estado']['estcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estado['Estado']['estcodigo']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['estcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pais'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estcodigo Paicodigo'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>