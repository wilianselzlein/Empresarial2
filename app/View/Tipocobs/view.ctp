<div class="tipocobs view">
<h2><?php  echo __('Tipo de Cobrança'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobsituacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipocob['Tipocob']['tipcobcodigo']), null, __('Are you sure you want to delete # %s?', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
	</ul>
</div>
