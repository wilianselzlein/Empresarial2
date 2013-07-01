<div class="planoconta index">
	<h2><?php echo __('Planos de Contas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('placodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('planome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('plaempresa', 'Empresa'); ?></th>
			<th><?php echo $this->Paginator->sort('plaanalitico', 'Analítico'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($planoconta as $planocontum): ?>
	<tr>
		<td><?php echo h($planocontum['Planocontum']['placodigo']); ?>&nbsp;</td>
		<td><?php echo h($planocontum['Planocontum']['planome']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($planocontum['Empresas']['empnome'], array('controller' => 'empresas', 'action' => 'view', $planocontum['Planocontum']['plaempresa'])); ?>&nbsp;</td>
		<td><?php echo h($planocontum['Planocontum']['plaanalitico']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planocontum['Planocontum']['placodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $planocontum['Planocontum']['placodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planocontum['Planocontum']['placodigo']), null, __('Are you sure you want to delete # %s?', $planocontum['Planocontum']['placodigo'])); ?>
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
