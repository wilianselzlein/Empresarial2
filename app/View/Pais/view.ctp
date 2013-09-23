<div class="pais view">
<h2><?php  echo __('País'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['painome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DDI'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paiddi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código Bacen'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigobacen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $pai['Pai']['paicodigo']), null, __('Deseja excluir# %s?', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Estados'); ?></h3>
	<?php if (!empty($pai['Estado'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Código'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Sigla'); ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($pai['Estado'] as $estado): ?>
		<tr>
			<td><?php echo $estado['estcodigo']; ?></td>
			<td><?php echo $estado['estnome']; ?></td>
			<td><?php echo $estado['estsigla']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'estados', 'action' => 'view', $estado['estcodigo'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'estados', 'action' => 'edit', $estado['estcodigo'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'estados', 'action' => 'delete', $estado['estcodigo']), null, __('Deseja excluir# %s?', $estado['estcodigo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>