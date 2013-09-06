<div class="planoconta view">
<h2><?php  echo __('Plano de Contas'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['placodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['planome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planocontum['Empresa']['empnome'], array('controller' => 'empresas', 'action' => 'view', $planocontum['Planocontum']['plaempresa'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Analítico'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['plaanalitico']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $planocontum['Planocontum']['placodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $planocontum['Planocontum']['placodigo']), null, __('Deseja excluir# %s?', $planocontum['Planocontum']['placodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
