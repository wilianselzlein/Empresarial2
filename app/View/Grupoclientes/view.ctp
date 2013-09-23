<div class="grupoclientes view">
<h2><?php  echo __('Grupos de Clientes'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($grupocliente['Grupocliente']['gruclinome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $grupocliente['Grupocliente']['gruclicodigo']), null, __('Deseja excluir# %s?', $grupocliente['Grupocliente']['gruclicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clientes'); ?></h3>
	<?php if (!empty($grupocliente['Grupocliente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Clicodigo'); ?></th>
		<th><?php echo __('Clipessoa'); ?></th>
		<th><?php echo __('Clirazao'); ?></th>
		<th><?php echo __('Clifantasia'); ?></th>
		<th><?php echo __('Cliendereco'); ?></th>
		<th><?php echo __('Clibairro'); ?></th>
		<th><?php echo __('Clicomplemento'); ?></th>
		<th><?php echo __('Clinumero'); ?></th>
		<th><?php echo __('Clicidade'); ?></th>
		<th><?php echo __('Clicep'); ?></th>
		<th><?php echo __('Clicxpostal'); ?></th>
		<th><?php echo __('Clifone'); ?></th>
		<th><?php echo __('Clifax'); ?></th>
		<th><?php echo __('Clicelular'); ?></th>
		<th><?php echo __('Cliemail'); ?></th>
		<th><?php echo __('Cliemailalt'); ?></th>
		<th><?php echo __('Clihomepage'); ?></th>
		<th><?php echo __('Clicontatofin'); ?></th>
		<th><?php echo __('Clicnpj'); ?></th>
		<th><?php echo __('Clicpf'); ?></th>
		<th><?php echo __('Cliie'); ?></th>
		<th><?php echo __('Cligrupo'); ?></th>
		<th><?php echo __('Clisituacao'); ?></th>
		<th><?php echo __('Clidatanasc'); ?></th>
		<th><?php echo __('Clinaturalidade'); ?></th>
		<th><?php echo __('Clipai'); ?></th>
		<th><?php echo __('Climae'); ?></th>
		<th><?php echo __('Clirg'); ?></th>
		<th><?php echo __('Cliorgaoexprg'); ?></th>
		<th><?php echo __('Clidataexprg'); ?></th>
		<th><?php echo __('Cliobs'); ?></th>
		<th><?php echo __('Cliformapgto'); ?></th>
		<th><?php echo __('Clidiafatura'); ?></th>
		<th><?php echo __('Cliim'); ?></th>
		<th><?php echo __('Clitipcob'); ?></th>
		<th><?php echo __('Cliopcaocad'); ?></th>
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($grupocliente['Cliente'] as $grupocliente): ?>
		<tr>
			<td><?php echo $grupocliente['clicodigo']; ?></td>
			<td><?php echo $grupocliente['clipessoa']; ?></td>
			<td><?php echo $grupocliente['clirazao']; ?></td>
			<td><?php echo $grupocliente['clifantasia']; ?></td>
			<td><?php echo $grupocliente['cliendereco']; ?></td>
			<td><?php echo $grupocliente['clibairro']; ?></td>
			<td><?php echo $grupocliente['clicomplemento']; ?></td>
			<td><?php echo $grupocliente['clinumero']; ?></td>
			<td><?php echo $grupocliente['clicidade']; ?></td>
			<td><?php echo $grupocliente['clicep']; ?></td>
			<td><?php echo $grupocliente['clicxpostal']; ?></td>
			<td><?php echo $grupocliente['clifone']; ?></td>
			<td><?php echo $grupocliente['clifax']; ?></td>
			<td><?php echo $grupocliente['clicelular']; ?></td>
			<td><?php echo $grupocliente['cliemail']; ?></td>
			<td><?php echo $grupocliente['cliemailalt']; ?></td>
			<td><?php echo $grupocliente['clihomepage']; ?></td>
			<td><?php echo $grupocliente['clicontatofin']; ?></td>
			<td><?php echo $grupocliente['clicnpj']; ?></td>
			<td><?php echo $grupocliente['clicpf']; ?></td>
			<td><?php echo $grupocliente['cliie']; ?></td>
			<td><?php echo $grupocliente['cligrupo']; ?></td>
			<td><?php echo $grupocliente['clisituacao']; ?></td>
			<td><?php echo $grupocliente['clidatanasc']; ?></td>
			<td><?php echo $grupocliente['clinaturalidade']; ?></td>
			<td><?php echo $grupocliente['clipai']; ?></td>
			<td><?php echo $grupocliente['climae']; ?></td>
			<td><?php echo $grupocliente['clirg']; ?></td>
			<td><?php echo $grupocliente['cliorgaoexprg']; ?></td>
			<td><?php echo $grupocliente['clidataexprg']; ?></td>
			<td><?php echo $grupocliente['cliobs']; ?></td>
			<td><?php echo $grupocliente['cliformapgto']; ?></td>
			<td><?php echo $grupocliente['clidiafatura']; ?></td>
			<td><?php echo $grupocliente['cliim']; ?></td>
			<td><?php echo $grupocliente['clitipcob']; ?></td>
			<td><?php echo $grupocliente['cliopcaocad']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'clientes', 'action' => 'view', $grupocliente['clicodigo'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'clientes', 'action' => 'edit', $grupocliente['clicodigo'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'clientes', 'action' => 'delete', $grupocliente['clicodigo']), null, __('Deseja excluir# %s?', $grupocliente['clicodigo'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Grupocliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>