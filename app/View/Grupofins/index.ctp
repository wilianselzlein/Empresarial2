<div class="grupofins index">
	<h2><?php echo __('Grupo Financeiro'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('grufincodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('grufinnome', 'Nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($grupofins as $grupofin): ?>
	<tr> 
		<td><?php echo h($grupofin['Grupofin']['grufincodigo']); ?>&nbsp;</td>
		<td><?php echo h($grupofin['Grupofin']['grufinnome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $grupofin['Grupofin']['grufincodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupofin['Grupofin']['grufincodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupofin['Grupofin']['grufincodigo']), null, __('Are you sure you want to delete # %s?', $grupofin['Grupofin']['grufincodigo'])); ?>
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
