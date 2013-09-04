<div class="formapgtos form">
<?php echo $this->Form->create('Formapgto'); ?>
	<fieldset>
		<legend><?php echo __('Editar Forma de Pagamento'); ?></legend>
	<?php
		echo $this->Form->input('forcodigo', array('label' => 'Código'));
		echo $this->Form->input('fornome', array('label' => 'Nome'));
		echo $this->Form->input('fortipo', array('label' => 'Tipo (1)À Vista - (2)À Prazo'));
		echo $this->Form->input('formesdia', array('label' => 'Dia do Faturamento'));
		echo $this->Form->input('forprazofixo', array('label' => 'Prazo Fixo (Informe o número de parcelas desejada)'));
		echo $this->Form->input('forsigla', array('label' => 'Sigla'));
		echo $this->Form->input('forsituacao', array('label' => 'Situação (A)tivo (I)nativo'));
		echo $this->Form->input('forcontabil', array('label' => 'Contábil (S)im (N)ão'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Formapgto.forcodigo')), null, __('Deseja excluir# %s?', $this->Form->value('Formapgto.forcodigo'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
	</ul>
</div>
