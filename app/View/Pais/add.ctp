<div class="pais form">
<?php echo $this->Form->create('Pai'); ?>
	<fieldset>
		<legend><?php echo __('Novo País'); ?></legend>
	<?php
		echo $this->Form->input('painome', array('label' => 'Nome'));
		echo $this->Form->input('paiddi', array('label' => 'DDI'));
		echo $this->Form->input('paicodigobacen', array('label' => 'Código Bacen'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
