<div class="cidades view">
<h2><?php  echo __('Cidade'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cidade['Estado']['estnome'], array('controller' => 'estados', 'action' => 'view', $cidade['Estado']['estcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código NFe'); ?></dt>
		<dd>
			<?php echo h($cidade['Cidade']['cidcodigonfe']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cidade['Cidade']['cidcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cidade['Cidade']['cidcodigo']), null, __('Are you sure you want to delete # %s?', $cidade['Cidade']['cidcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
	</ul>
</div>
