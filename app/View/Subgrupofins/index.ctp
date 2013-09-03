<div class="subgrupofins index">
	<h2><?php echo __('Subgrupos Financeiro'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('subgfcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('subgfnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('subgfgrupo', 'Grupo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subgrupofins as $subgrupofin): ?>
	<tr>
		<td><?php echo h($subgrupofin['Subgrupofin']['subgfcodigo']); ?>&nbsp;</td>
		<td><?php echo h($subgrupofin['Subgrupofin']['subgfnome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subgrupofin['Grupofin']['grufinnome'], array('controller' => 'grupofins', 'action' => 'view', $subgrupofin['Grupofin']['grufincodigo'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subgrupofin['Subgrupofin']['subgfcodigo']), null, __('Are you sure you want to delete # %s?', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('List Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
