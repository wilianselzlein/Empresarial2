<div class="tipocobs view">
<h2><?php  echo __('Tipocob'); ?></h2>
	<dl>
		<dt><?php echo __('Tipcobcodigo'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipcobnome'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipcobsituacao'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobsituacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipocob'), array('action' => 'edit', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipocob'), array('action' => 'delete', $tipocob['Tipocob']['tipcobcodigo']), null, __('Are you sure you want to delete # %s?', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocob'), array('action' => 'add')); ?> </li>
	</ul>
</div>
