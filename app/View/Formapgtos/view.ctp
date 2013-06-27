<div class="formapgtos view">
<h2><?php  echo __('Formapgto'); ?></h2>
	<dl>
		<dt><?php echo __('Forcodigo'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fornome'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['fornome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fortipo'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['fortipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formesdia'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['formesdia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forprazofixo'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forprazofixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forsigla'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forsigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forsituacao'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forsituacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formapgto'), array('action' => 'edit', $formapgto['Formapgto']['forcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formapgto'), array('action' => 'delete', $formapgto['Formapgto']['forcodigo']), null, __('Are you sure you want to delete # %s?', $formapgto['Formapgto']['forcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formapgtos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formapgto'), array('action' => 'add')); ?> </li>
	</ul>
</div>
