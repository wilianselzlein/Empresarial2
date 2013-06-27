<div class="grupofins view">
<h2><?php  echo __('Grupofin'); ?></h2>
	<dl>
		<dt><?php echo __('Grufincodigo'); ?></dt>
		<dd>
			<?php echo h($grupofin['Grupofin']['grufincodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grufinnome'); ?></dt>
		<dd>
			<?php echo h($grupofin['Grupofin']['grufinnome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupofin'), array('action' => 'edit', $grupofin['Grupofin']['grufincodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupofin'), array('action' => 'delete', $grupofin['Grupofin']['grufincodigo']), null, __('Are you sure you want to delete # %s?', $grupofin['Grupofin']['grufincodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupofins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupofin'), array('action' => 'add')); ?> </li>
	</ul>
</div>
