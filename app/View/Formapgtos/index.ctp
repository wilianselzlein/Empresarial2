<div class="formapgtos index">
	<h2><?php echo __('Forma de Pagamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('forcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('fornome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('fortipo', 'Tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('formesdia', 'Dia Fat.'); ?></th>
			<th><?php echo $this->Paginator->sort('forprazofixo', 'Prazo Fixo'); ?></th>
			<th><?php echo $this->Paginator->sort('forsigla', 'Sigla'); ?></th>
			<th><?php echo $this->Paginator->sort('forsituacao', 'Situação'); ?></th>
			<th><?php echo $this->Paginator->sort('forcontabil', 'Contabil'); ?></th>			
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($formapgtos as $formapgto): ?>
	<tr>
		<td><?php echo h($formapgto['Formapgto']['forcodigo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['fornome']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['fortipo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['formesdia']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forprazofixo']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forsigla']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forsituacao']); ?>&nbsp;</td>
		<td><?php echo h($formapgto['Formapgto']['forcontabil']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $formapgto['Formapgto']['forcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $formapgto['Formapgto']['forcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $formapgto['Formapgto']['forcodigo']), null, __('Deseja excluir# %s?', $formapgto['Formapgto']['forcodigo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} total, iniciando no registro {:start}, finalizando em {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?></li>
	</ul>
</div>
