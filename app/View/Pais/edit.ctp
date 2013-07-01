<div class="pais form">
<?php echo $this->Form->create('Pai'); ?>
	<fieldset>
		<legend><?php echo __('Edit País'); ?></legend>
	<?php
		echo $this->Form->input('paicodigo', array('label' => 'Código'));
		echo $this->Form->input('painome', array('label' => 'Nome'));
		echo $this->Form->input('paiddi', array('label' => 'DDI'));
		echo $this->Form->input('paicodigobacen', array('label' => 'Código Bacen'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pai.paicodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pai.paicodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
