<div class="pais view">
<h2><?php  echo __('Pai'); ?></h2>
	<dl>
		<dt><?php echo __('Paicodigo'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Painome'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['painome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paiddi'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paiddi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paicodigobacen'); ?></dt>
		<dd>
			<?php echo h($pai['Pai']['paicodigobacen']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pai'), array('action' => 'edit', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pai'), array('action' => 'delete', $pai['Pai']['paicodigo']), null, __('Are you sure you want to delete # %s?', $pai['Pai']['paicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pais'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pai'), array('action' => 'add')); ?> </li>
	</ul>
</div>
