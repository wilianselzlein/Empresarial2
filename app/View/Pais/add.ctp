<div class="pais form">
<?php echo $this->Form->create('Pai'); ?>
	<fieldset>
		<legend><?php echo __('Add Pai'); ?></legend>
	<?php
		echo $this->Form->input('painome');
		echo $this->Form->input('paiddi');
		echo $this->Form->input('paicodigobacen');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pais'), array('action' => 'index')); ?></li>
	</ul>
</div>
