<div class="subgrupofins index">
	<h2><?php echo __('Subgrupos Financeiro'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('subgfcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('subgfnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('subgfgrupo', 'Grupo'); ?></th>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($subgrupofins as $subgrupofin): ?>
	<tr>
		<td><?php echo h($subgrupofin['Subgrupofin']['subgfcodigo']); ?>&nbsp;</td>
		<td><?php echo h($subgrupofin['Subgrupofin']['subgfnome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subgrupofin['Grupofin']['grufinnome'], array('controller' => 'grupofins', 'action' => 'view', $subgrupofin['Grupofin']['grufincodigo'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $subgrupofin['Subgrupofin']['subgfcodigo']), null, __('Deseja excluir# %s?', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('Listar Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Grupo Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
