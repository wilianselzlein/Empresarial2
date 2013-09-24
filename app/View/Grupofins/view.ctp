<div class="grupofins view">
<h2><?php  echo __('Grupo Financeiro'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($grupofin['Grupofin']['grufincodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($grupofin['Grupofin']['grufinnome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grupofin['Grupofin']['grufincodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $grupofin['Grupofin']['grufincodigo']), null, __('Deseja excluir# %s?', $grupofin['Grupofin']['grufincodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
    <h3><?php echo __('Subgrupos Financeiro'); ?></h3>
    <?php if (!empty($grupofin['Subgrupofin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
	    <th><?php echo __('Código'); ?></th>
	    <th><?php echo __('Nome'); ?></th>
	    <th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
	    $i = 0;
	    foreach ($grupofin['Subgrupofin'] as $subgrupofin): ?>
	    <tr>
		<td><?php echo $subgrupofin['subgfcodigo']; ?></td>
		<td><?php echo $subgrupofin['subgfnome']; ?></td>
		<td class="actions">
		    <?php echo $this->Html->link(__('Ver'), array('controller' => 'subgrupofins', 'action' => 'view', $subgrupofin['subgfcodigo'])); ?>
		    <?php echo $this->Html->link(__('Editar'), array('controller' => 'subgrupofins', 'action' => 'edit', $subgrupofin['subgfcodigo'])); ?>
		    <?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'subgrupofins', 'action' => 'delete', $subgrupofin['subgfcodigo']), null, __('Deseja excluir# %s?', $subgrupofin['subgfcodigo'])); ?>
		</td>
	    </tr>
	<?php endforeach; ?>
	</table>
    <?php endif; ?>
    <div class="actions">
	<ul>
	    <li><?php echo $this->Html->link(__('Novo Subgrupo'), array('controller' => 'subgrupofins', 'action' => 'add')); ?> </li>
	</ul>
    </div>
</div>