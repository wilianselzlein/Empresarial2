<div class="empresas index">
	<h2><?php echo __('Empresas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empcodigo', 'Código'); ?></th>
			<th><?php echo $this->Paginator->sort('empnome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('empendereco', 'Endereço'); ?></th>
			<th><?php echo $this->Paginator->sort('empbairro', 'Bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('empcidade', 'Cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('empcep', 'CEP'); ?></th>
			<th><?php echo $this->Paginator->sort('empfone', 'Fone'); ?></th>
			<th><?php echo $this->Paginator->sort('empfax', 'Fax'); ?></th>
			<th><?php echo $this->Paginator->sort('empemail', 'Email'); ?></th>
			<th><?php echo $this->Paginator->sort('emphomepage', 'Site'); ?></th>
			<th><?php echo $this->Paginator->sort('empcnpj', 'CNPJ'); ?></th>
			<th><?php echo $this->Paginator->sort('empcpf', 'CPF'); ?></th>
			<th><?php echo $this->Paginator->sort('empie', 'IE'); ?></th>
			<th><?php echo $this->Paginator->sort('empim', 'IM'); ?></th>
			<th><?php echo $this->Paginator->sort('emprg', 'RG'); ?></th>
			<th><?php echo $this->Paginator->sort('emporgaoexprg', 'Orgão Exp.'); ?></th>
			<th><?php echo $this->Paginator->sort('empdataemprg', 'Data Exp.'); ?></th>
			<th><?php echo $this->Paginator->sort('empcontato', 'Contato'); ?></th>
			<th><?php echo $this->Paginator->sort('empcontador', 'Contador'); ?></th>
			<th><?php echo $this->Paginator->sort('empcrccontador', 'CRC'); ?></th>
			<th><?php echo $this->Paginator->sort('emptitular', 'Titular'); ?></th>
			<th><?php echo $this->Paginator->sort('empcargotitular', 'Cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('empcpftitular', 'CPF'); ?></th>
			<th><?php echo $this->Paginator->sort('empregjunta', 'Reg Junta'); ?></th>
			<th><?php echo $this->Paginator->sort('empdataregjunta', 'Data Reg Junta'); ?></th>
			<th><?php echo $this->Paginator->sort('empobs', 'Obs'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['empcodigo']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empnome']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empendereco']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empbairro']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresa['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($empresa['Empresa']['empcep']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empfone']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empfax']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empemail']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emphomepage']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcnpj']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcpf']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empie']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empim']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emporgaoexprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empdataemprg']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcontato']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcontador']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcrccontador']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['emptitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcargotitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empcpftitular']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empregjunta']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empdataregjunta']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['empobs']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresa['Empresa']['empcodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['empcodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['empcodigo']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['empcodigo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
