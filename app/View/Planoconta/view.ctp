<div class="planoconta view">
<h2><?php  echo __('Planocontum'); ?></h2>
	<dl>
		<dt><?php echo __('Placodigo'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['placodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planome'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['planome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaempresa'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['plaempresa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plaanalitico'); ?></dt>
		<dd>
			<?php echo h($planocontum['Planocontum']['plaanalitico']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Planocontum'), array('action' => 'edit', $planocontum['Planocontum']['placodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Planocontum'), array('action' => 'delete', $planocontum['Planocontum']['placodigo']), null, __('Are you sure you want to delete # %s?', $planocontum['Planocontum']['placodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Planoconta'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planocontum'), array('action' => 'add')); ?> </li>
	</ul>
</div>
