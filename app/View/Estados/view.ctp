<div class="estados view">
<h2><?php  echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estsigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('País'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estado['Pais']['painome'], array('controller' => 'pais', 'action' => 'view', $estado['Estado']['estpais'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $estado['Estado']['estcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $estado['Estado']['estcodigo']), null, __('Deseja excluir# %s?', $estado['Estado']['estcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Países'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo País'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Cidades'); ?></h3>
	<?php if (!empty($estado['Cidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Código'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('CEP'); ?></th>
		<th><?php echo __('NFE'); ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estado['Cidade'] as $cidade): ?>
		<tr>
			<td><?php echo $cidade['cidcodigo']; ?></td>
			<td><?php echo $cidade['cidnome']; ?></td>
			<td><?php echo $cidade['cidcep']; ?></td>
			<td><?php echo $cidade['cidcodigonfe']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'cidades', 'action' => 'view', $cidade['cidcodigo'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'cidades', 'action' => 'edit', $cidade['cidcodigo'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'cidades', 'action' => 'delete', $cidade['cidcodigo']), null, __('Deseja excluir# %s?', $cidade['cidcodigo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nova Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>