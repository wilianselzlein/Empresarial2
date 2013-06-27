<div class="formapgtos form">
<?php echo $this->Form->create('Formapgto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formapgto'); ?></legend>
	<?php
		echo $this->Form->input('forcodigo');
		echo $this->Form->input('fornome');
		echo $this->Form->input('fortipo');
		echo $this->Form->input('formesdia');
		echo $this->Form->input('forprazofixo');
		echo $this->Form->input('forsigla');
		echo $this->Form->input('forsituacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Formapgto.forcodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Formapgto.forcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List Formapgtos'), array('action' => 'index')); ?></li>
	</ul>
</div>
