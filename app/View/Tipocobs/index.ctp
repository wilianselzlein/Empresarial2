<div class="tipocobs index">
	<h2><?php echo __('Tipos de cobrança'); ?></h2>
        <?php include dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'filtros.php'; ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tipcobcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('tipcobnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('tipcobsituacao', 'Situação'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($tipocobs as $tipocob): ?>
	<tr>
		<td><?php echo h($tipocob['Tipocob']['tipcobcodigo']); ?>&nbsp;</td>
		<td><?php echo h($tipocob['Tipocob']['tipcobnome']); ?>&nbsp;</td>
		<td><?php echo h($tipocob['Tipocob']['tipcobsituacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tipocob['Tipocob']['tipcobcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipocob['Tipocob']['tipcobcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $tipocob['Tipocob']['tipcobcodigo']), null, __('Deseja excluir# %s?', $tipocob['Tipocob']['tipcobcodigo'])); ?>
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
	</ul>
</div>
