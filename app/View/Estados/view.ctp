<div class="estados view">
<h2><?php  echo __('Estado'); ?></h2>
	<dl>
		<dt><?php echo __('Estcodigo'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estnome'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estsigla'); ?></dt>
		<dd>
			<?php echo h($estado['Estado']['estsigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('País'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estado['Pais']['painome'], array('controller' => 'pais', 'action' => 'view', $estado['Estado']['estpais'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estado'), array('action' => 'edit', $estado['Estado']['estcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estado'), array('action' => 'delete', $estado['Estado']['estcodigo']), null, __('Are you sure you want to delete # %s?', $estado['Estado']['estcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pais'), array('controller' => 'pais', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New País'), array('controller' => 'pais', 'action' => 'add')); ?> </li>
	</ul>
</div>
