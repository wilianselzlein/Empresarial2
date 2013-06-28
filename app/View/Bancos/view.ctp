<div class="bancos view">
<h2><?php  echo __('Banco'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['bancodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['bannome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banco'), array('action' => 'edit', $banco['Banco']['bancodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Banco'), array('action' => 'delete', $banco['Banco']['bancodigo']), null, __('Are you sure you want to delete # %s?', $banco['Banco']['bancodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('action' => 'add')); ?> </li>
	</ul>
</div>
