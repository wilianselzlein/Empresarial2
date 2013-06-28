<div class="formapgtos index">
	<h2><?php echo __('Formapgtos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('forcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('fornome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('fortipo', 'Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('formesdia', 'Dia Fat.'); ?></th>
			<th><?php echo $this->Paginator->sort('forprazofixo', 'Prazo Fixo'); ?></th>
			<th><?php echo $this->Paginator->sort('forsigla', 'Sigla'); ?></th>
			<th><?php echo $this->Paginator->sort('forsituacao', 'Situação'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formapgtos as $formapgto): ?>
	<tr>
		<td><?php echo h($formapgto['Formapgto']['forcodigo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['fornome']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['fortipo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['formesdia']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forprazofixo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forsigla']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forsituacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formapgto['Formapgto']['forcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formapgto['Formapgto']['forcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formapgto['Formapgto']['forcodigo']), null, __('Are you sure you want to delete # %s?', $formapgto['Formapgto']['forcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('New Formapgto'), array('action' => 'add')); ?></li>
	</ul>
</div>
