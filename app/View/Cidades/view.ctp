<div class="cidades view">
<h2><?php  echo __('Cidade'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cidade['Estado']['estnome'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['estcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código NFe'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcodigonfe']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cidade['Cidade']['cidcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cidade['Cidade']['cidcodigo']), null, __('Deseja excluir# %s?', $cidade['Cidade']['cidcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Clientes'); ?></h3>
	<?php if (!empty($cidade['Cliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Código'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cidade['Cliente'] as $cidade): ?>
		<tr>
			<td><?php echo $cidade['clicodigo']; ?></td>
			<td><?php echo $cidade['clirazao']; ?></td>
			<td><?php echo $cidade['clifone']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'clientes', 'action' => 'view', $cidade['clicodigo'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clientes', 'action' => 'edit', $cidade['clicodigo'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'clientes', 'action' => 'delete', $cidade['clicodigo']), null, __('Deseja excluir# %s?', $cidade['clicodigo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>