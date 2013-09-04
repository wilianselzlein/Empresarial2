<div class="estados index">
	<h2><?php echo __('Estados'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('estcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('estnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('estsigla', 'Sigla'); ?></th>
			<th><?php echo $this->Paginator->sort('estpais', 'País'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
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
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $estado['Estado']['estcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estado['Estado']['estcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $estado['Estado']['estcodigo']), null, __('Deseja excluir# %s?', $estado['Estado']['estcodigo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, iniciando no registro {:start}, finalizando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Países'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo País'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
