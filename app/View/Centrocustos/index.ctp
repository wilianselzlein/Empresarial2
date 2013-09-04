<div class="centrocustos index">
	<h2><?php echo __('Centros de Custos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cencuscodigo', 'Código'); ?></th>
			<?php // <th> php echo $this->Paginator->sort('cencusanalitico', 'Analítico'); </th> ?>
			<th><?php echo $this->Paginator->sort('cencusnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cencusempresa', 'Empresa'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($centrocustos as $centrocusto): ?>
	<tr>
		<td><?php echo h($centrocusto['Centrocusto']['cencuscodigo']); ?>&nbsp;</td>
		<?php //<td> echo h($centrocusto['Centrocusto']['cencusanalitico']); &nbsp;</td>?>
		<td><?php echo h($centrocusto['Centrocusto']['cencusnome']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($centrocusto['Empresa']['empnome'], array('controller' => 'empresas', 'action' => 'view', $centrocusto['Centrocusto']['cencusempresa'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $centrocusto['Centrocusto']['cencuscodigo']), null, __('Deseja excluir# %s?', $centrocusto['Centrocusto']['cencuscodigo'])); ?>
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
