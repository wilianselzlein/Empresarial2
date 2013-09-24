<div class="tipocobs view">
<h2><?php  echo __('Tipo de Cobrança'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php echo h($tipocob['Tipocob']['tipcobsituacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $tipocob['Tipocob']['tipcobcodigo']), null, __('Deseja excluir# %s?', $tipocob['Tipocob']['tipcobcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Financeiros'); ?></h3>
	<?php if (!empty($tipocob['Fin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Cliente'); ?></th>
		<th><?php echo __('Documento'); ?></th>
		<th><?php echo __('Parcela'); ?></th>
                <th><?php echo __('Emissão'); ?></th>
                <th><?php echo __('Vencimento'); ?></th>
                <th><?php echo __('Situação'); ?></th> 
                <th><?php echo __('Valor'); ?></th>
                <th><?php echo __('Valor Pago'); ?></th> 
                <th><?php echo __('Subgrupo Fin'); ?></th> 
                <th><?php echo __('Obs'); ?></th> 
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipocob['Fin'] as $tipocob): ?>
		<tr>
			<td><?php echo $this->Html->link($tipocob['Cliente']['clifantasia'], array('controller' => 'clientes', 'action' => 'view', $tipocob['Cliente']['clicodigo'])); ?></td>
			<td><?php echo $tipocob['findcto1']; ?></td>
			<td><?php echo $tipocob['finparcela']; ?></td>
                        <td><?php echo $this->Locale->date($tipocob['finemissao']); ?></td>
                        <td><?php echo $this->Locale->date($tipocob['finvcto']); ?></td>
			<td><?php if ($tipocob['finsituacao'] == 0) echo 'Aberto'; else echo 'Fechado'; ?>&nbsp;</td>
                        <td><?php echo $this->Locale->currency($tipocob['finvalor']); ?></td>
                        <td><?php echo $tipocob['finvalorpago']; ?></td>			
			<td><?php echo $this->Html->link($tipocob['Subgrupofin']['subgfnome'], array('controller' => 'subgrupofins', 'action' => 'view', $tipocob['Subgrupofin']['subgfcodigo'])); ?></td>
                        <td><?php echo $tipocob['finobs']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'financeiros', 'action' => 'view', $tipocob['finregistro'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'financeiros', 'action' => 'edit', $tipocob['finregistro'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'financeiros', 'action' => 'delete', $tipocob['finregistro']), null, __('Deseja excluir# %s?', $tipocob['finregistro'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Financeiro'), array('controller' => 'financeiros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>