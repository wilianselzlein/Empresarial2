<div class="cidades index">
	<h2><?php echo __('Cidades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cidcodigo'); ?></th>
			<th><?php echo $this->Paginator->sort('cidnome'); ?></th>
			<th><?php echo $this->Paginator->sort('cidestado'); ?></th>
			<th><?php echo $this->Paginator->sort('cidcep'); ?></th>
			<th><?php echo $this->Paginator->sort('cidcodigonfe'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cidades as $cidade): ?>
	<tr>
		<td><?php echo h($cidade['Cidade']['cidcodigo']); ?>&nbsp;</td>
		<td><?php echo h($cidade['Cidade']['cidnome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cidade['Estado']['estnome'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['estcodigo'])); ?>
		</td>
		<td><?php echo h($cidade['Cidade']['cidcep']); ?>&nbsp;</td>
		<td><?php echo h($cidade['Cidade']['cidcodigonfe']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cidade['Cidade']['cidcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cidade['Cidade']['cidcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cidade['Cidade']['cidcodigo']), null, __('Are you sure you want to delete # %s?', $cidade['Cidade']['cidcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cidade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
