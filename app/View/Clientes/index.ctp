<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('clicodigo', 'Código'); ?></th>
			<!--<th><?php // echo $this->Paginator->sort('clidatacad'); ?></th>-->
			<th><?php echo $this->Paginator->sort('clipessoa', 'Pes'); ?></th>
			<th><?php echo $this->Paginator->sort('clirazao', 'Razão Social'); ?></th>
			<th><?php echo $this->Paginator->sort('clifantasia', 'Fantasia'); ?></th>
			<th><?php echo $this->Paginator->sort('cliendereco', 'Endereço'); ?></th>
			<th><?php echo $this->Paginator->sort('clibairro', 'Bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('clicomplemento', 'Complemento'); ?></th>
			<th><?php echo $this->Paginator->sort('clinumero', 'Número'); ?></th>
			<th><?php echo $this->Paginator->sort('clicidade', 'Cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('clicep', 'CEP'); ?></th>
			<th><?php echo $this->Paginator->sort('clicxpostal', 'Cx Postal'); ?></th>
			<th><?php echo $this->Paginator->sort('clifone', 'Fone'); ?></th>
			<th><?php echo $this->Paginator->sort('clifax', 'Fax'); ?></th>
			<th><?php echo $this->Paginator->sort('clicelular', 'Celular'); ?></th>
			<th><?php echo $this->Paginator->sort('cliemail', 'Email'); ?></th>
			<th><?php echo $this->Paginator->sort('cliemailalt', 'Email Alt.'); ?></th>
			<th><?php echo $this->Paginator->sort('clihomepage', 'Site'); ?></th>
			<th><?php echo $this->Paginator->sort('clicontatofin', 'Contato'); ?></th>
			<th><?php echo $this->Paginator->sort('clicnpj', 'CNPJ'); ?></th>
			<th><?php echo $this->Paginator->sort('clicpf', 'CPF'); ?></th>
			<th><?php echo $this->Paginator->sort('cliie', 'IE'); ?></th>
			<th><?php echo $this->Paginator->sort('cligrupo', 'Grupo'); ?></th>
			<th><?php echo $this->Paginator->sort('clisituacao', 'Situação'); ?></th>
			<th><?php echo $this->Paginator->sort('clidatanasc', 'Data Nasc'); ?></th>
			<th><?php echo $this->Paginator->sort('clinaturalidade', 'Naturalidade'); ?></th>
			<th><?php echo $this->Paginator->sort('clipai', 'Pai'); ?></th>
			<th><?php echo $this->Paginator->sort('climae', 'Mãe'); ?></th>
			<th><?php echo $this->Paginator->sort('clirg', 'RG'); ?></th>
			<th><?php echo $this->Paginator->sort('cliorgaoexprg', 'Orgão Exp.'); ?></th>
			<th><?php echo $this->Paginator->sort('clidataexprg', 'Data Exp'); ?></th>
			<th><?php echo $this->Paginator->sort('cliobs', 'Obs'); ?></th>
			<th><?php echo $this->Paginator->sort('cliformapgto', 'Forma Pgto'); ?></th>
			<th><?php echo $this->Paginator->sort('clidiafatura', 'Dia Fatura'); ?></th>
			<th><?php echo $this->Paginator->sort('cliim', 'IM'); ?></th>
			<th><?php echo $this->Paginator->sort('clitipcob', 'Tipo Cob.'); ?></th>
			<!--<th><?php //echo $this->Paginator->sort('cliopcaocad', 'Opção Cad.'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['clicodigo']); ?>&nbsp;</td>
		<!--<td><?php // echo h($cliente['Cliente']['clidatacad']); ?>&nbsp;</td>-->
		<td><?php echo h($cliente['Cliente']['clipessoa']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clirazao']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifantasia']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliendereco']); ?>&nbsp;
		    <?php 
			if (! $cliente['Cliente']['cliendereco'] == '')
			echo $this->Html->link(
				$this->Html->image('world.png', array('alt' => 'Visualizar no Google Maps', 'border' => '0')),
				'https://maps.google.com/maps?q='.$cliente['Cliente']['cliendereco'].' '.$cliente['Cliente']['clinumero'].' '.$cliente['Cliente']['clibairro'].','.$cliente['Cidade']['cidnome'].'&hl=pt',
				array('target' => '_blank', 'escape' => false)
			);
		    ?>			
		</td>
		<td><?php echo h($cliente['Cliente']['clibairro']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicomplemento']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clinumero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clicep']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicxpostal']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clifax']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicelular']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliemail']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliemailalt']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clihomepage']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicontatofin']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicnpj']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clicpf']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliie']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Grupocliente']['gruclinome'], array('controller' => 'grupoclientes', 'action' => 'view', $cliente['Cliente']['cligrupo'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clisituacao']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clidatanasc']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Naturalidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Naturalidade']['cidcodigo'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clipai']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['climae']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clirg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliorgaoexprg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['clidataexprg']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliobs']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($cliente['Formapgto']['fornome'], array('controller' => 'formapgtos', 'action' => 'view', $cliente['Cliente']['cliformapgto'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['clidiafatura']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cliim']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Tipocob']['tipcobnome'], array('controller' => 'tipocobs', 'action' => 'view', $cliente['Cliente']['clitipcob'])); ?>
		</td>
		<!--<td><?php //echo h($cliente['Cliente']['cliopcaocad']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['clicodigo'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['clicodigo'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['clicodigo']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['clicodigo'])); ?>
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
		<li><?php echo $this->Html->link(__('List Cidade'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>