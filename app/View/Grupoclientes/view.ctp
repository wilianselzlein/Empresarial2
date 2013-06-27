<div class="grupoclientes view">
<h2><?php  echo __('Grupocliente'); ?></h2>
	<dl>
		<dt><?php echo __('Gruclicodigo'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gruclinome'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclinome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupocliente'), array('action' => 'edit', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupocliente'), array('action' => 'delete', $grupocliente['Grupocliente']['gruclicodigo']), null, __('Are you sure you want to delete # %s?', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupoclientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupocliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>
