<div class="centrocustos form">
<?php echo $this->Form->create('Centrocusto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Centro de Custo'); ?></legend>
	<?php
		echo $this->Form->input('cencuscodigo', array('label' => 'Código'));
		echo $this->Form->input('cencusanalitico', array('label' => 'Analítico'));
		echo $this->Form->input('cencusnome', array('label' => 'Nome'));
		echo $this->Form->input('empresa', array('label' => 'Empresa'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Centrocusto.cencuscodigo')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Centrocusto.cencuscodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?></li>
	</ul>
</div>
