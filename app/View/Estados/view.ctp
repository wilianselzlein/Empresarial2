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
