<div class="cidades index">
	<h2><?php echo __('Cidades'); ?></h2>
	<?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cidcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('cidnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cidestado', 'Estado'); ?></th>
			<th><?php echo $this->Paginator->sort('cidcep', 'CEP'); ?></th>
			<th><?php echo $this->Paginator->sort('cidcodigonfe', 'Código NFE'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
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
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cidade['Cidade']['cidcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cidade['Cidade']['cidcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cidade['Cidade']['cidcodigo']), null, __('Deseja excluir# %s?', $cidade['Cidade']['cidcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
