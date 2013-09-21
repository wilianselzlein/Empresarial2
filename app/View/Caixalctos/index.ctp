<div class="caixalctos index">
	<h2><?php echo __('Lançamentos no Caixa'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('cailctcodigo', 'Lançamento'); ?></th>
			<?php //<th> echo $this->Paginator->sort('cailctitem');</th>?>
			<th><?php echo $this->Paginator->sort('cailctdcto', 'Documento'); ?></th>
			<th><?php echo $this->Paginator->sort('cailctoperacao', 'Oper.'); ?></th>
			<th><?php echo $this->Paginator->sort('cailctvalor', 'Valor'); ?></th>
			<th><?php echo $this->Paginator->sort('cailctformapgto', 'Forma Pgto'); ?></th>
			<th><?php echo $this->Paginator->sort('cailcthistorico', 'Histórico'); ?></th>
			<th><?php echo $this->Paginator->sort('cailctdata', 'Data'); ?></th>
			<th><?php echo $this->Paginator->sort('cailcthora', 'Hora'); ?></th>
			<?php //<th> echo $this->Paginator->sort('cailctprograma'); </th>?>
			<?php //<th><?php echo $this->Paginator->sort('cailctold'); </th>?>
			<?php //<th><?php echo $this->Paginator->sort('cailctdcto2'); </th>?>
			<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php foreach ($caixalctos as $caixalcto): ?>
	<tr>
		<td><?php echo h($caixalcto['Caixalcto']['cailctcodigo']); ?>&nbsp;</td>
		<?php //<td><?php echo h($caixalcto['Caixalcto']['cailctitem']); &nbsp;</td>?>
		<td><?php echo h($caixalcto['Caixalcto']['cailctdcto']); ?>&nbsp;</td>
		<td><?php echo h($caixalcto['Caixalcto']['cailctoperacao']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->currency($caixalcto['Caixalcto']['cailctvalor']); ?>&nbsp;</td>
		<td>
		    <?php echo $this->Html->link($caixalcto['Formapgto']['fornome'], array('controller' => 'formapgtos', 'action' => 'view', $caixalcto['Caixalcto']['cailctformapgto'])); ?>&nbsp;
		</td>
		<td><?php echo h($caixalcto['Caixalcto']['cailcthistorico']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->date($caixalcto['Caixalcto']['cailctdata']); ?>&nbsp;</td>
		<td><?php echo h($caixalcto['Caixalcto']['cailcthora']); ?>&nbsp;</td>
		<?php //<td><?php echo h($caixalcto['Caixalcto']['cailctprograma']); &nbsp;</td>?>
		<?php //<td><?php echo h($caixalcto['Caixalcto']['cailctold']); &nbsp;</td>?>
		<?php //<td><?php echo h($caixalcto['Caixalcto']['cailctdcto2']); &nbsp;</td>?>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $caixalcto['Caixalcto']['cailctcodigo'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caixalcto['Caixalcto']['cailctcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $caixalcto['Caixalcto']['cailctcodigo']), null, __('Deseja excluir# %s?', $caixalcto['Caixalcto']['cailctcodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('Formas de Pgtos'), array('controller' => 'formapgtos', 'action' => 'index')); ?> </li>
	</ul>
</div>
