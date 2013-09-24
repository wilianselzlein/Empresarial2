<div class="subgrupofins view">
<h2><?php  echo __('Subgrupo Financeiro'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($subgrupofin['Subgrupofin']['subgfcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($subgrupofin['Subgrupofin']['subgfnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo Financeiro'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subgrupofin['Grupofin']['grufinnome'], array('controller' => 'grupofins', 'action' => 'view', $subgrupofin['Grupofin']['grufincodigo'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $subgrupofin['Subgrupofin']['subgfcodigo']), null, __('Deseja excluir# %s?', $subgrupofin['Subgrupofin']['subgfcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Grupos Financeiro'), array('controller' => 'grupofins', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
    <h3><?php echo __('Grupo Financeiro'); ?></h3>
    <?php if (!empty($subgrupofin['Grupofin'])): ?>
	<dl>
	    <dt><?php echo __('Código'); ?></dt>
		<dd>
		    <?php echo $subgrupofin['Grupofin']['grufincodigo']; ?> &nbsp;
		</dd>
	    <dt><?php echo __('Nome'); ?></dt>
		<dd>
		    <?php echo $subgrupofin['Grupofin']['grufinnome']; ?> &nbsp;
		</dd>
	</dl>
    <?php endif; ?>
    <div class="actions">
	<ul>
	    <li><?php echo $this->Html->link(__('Editar'), array('controller' => 'grupofins', 'action' => 'edit', $subgrupofin['Grupofin']['grufincodigo'])); ?></li>
	</ul>
    </div>
</div>