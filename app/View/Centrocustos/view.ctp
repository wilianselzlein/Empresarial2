<div class="centrocustos view">
<h2><?php  echo __('Centrocusto'); ?></h2>
	<dl>
		<dt><?php echo __('Cencuscodigo'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencuscodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cencusanalitico'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencusanalitico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cencusnome'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencusnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cencusempresa'); ?></dt>
		<dd>
			<?php echo h($centrocusto['Centrocusto']['cencusempresa']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Centrocusto'), array('action' => 'edit', $centrocusto['Centrocusto']['cencuscodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Centrocusto'), array('action' => 'delete', $centrocusto['Centrocusto']['cencuscodigo']), null, __('Are you sure you want to delete # %s?', $centrocusto['Centrocusto']['cencuscodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Centrocustos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centrocusto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
