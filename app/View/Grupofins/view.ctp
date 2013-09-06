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
