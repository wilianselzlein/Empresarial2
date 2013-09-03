<div class="pais view">
<h2><?php  echo __('País'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['painome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DDI'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paiddi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Código Bacen'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigobacen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pai['Pai']['paicodigo']), null, __('Are you sure you want to delete # %s?', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
	</ul>
</div>
