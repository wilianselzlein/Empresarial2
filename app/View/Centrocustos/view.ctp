<div class="centrocustos view">
<h2><?php  echo __('Centro de Custo'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencuscodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Analítico'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencusanalitico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencusnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($centrocusto['Empresa']['empnome'], array('controller' => 'empresas', 'action' => 'view', $centrocusto['Centrocusto']['cencusempresa'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $centrocusto['Centrocusto']['cencuscodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $centrocusto['Centrocusto']['cencuscodigo']), null, __('Are you sure you want to delete # %s?', $centrocusto['Centrocusto']['cencuscodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
	</ul>
</div>
