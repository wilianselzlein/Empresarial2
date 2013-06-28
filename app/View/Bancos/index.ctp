<div class="bancos index">
	<h2><?php echo __('Bancos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('bancodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('bannome', 'Nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bancos as $banco): ?>
	<tr>
		<td><?php echo h($banco['Banco']['bancodigo']); ?>&nbsp;</td>
		<td><?php echo h($banco['Banco']['bannome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $banco['Banco']['bancodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $banco['Banco']['bancodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $banco['Banco']['bancodigo']), null, __('Are you sure you want to delete # %s?', $banco['Banco']['bancodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Banco'), array('action' => 'add')); ?></li>
	</ul>
</div>
