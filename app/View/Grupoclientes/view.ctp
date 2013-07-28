<div class="grupoclientes view">
<h2><?php  echo __('Grupos de Clientes'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclinome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $grupocliente['Grupocliente']['gruclicodigo']), null, __('Are you sure you want to delete # %s?', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
	</ul>
</div>
