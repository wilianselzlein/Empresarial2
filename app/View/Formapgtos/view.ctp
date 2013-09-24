<div class="formapgtos view">
<h2><?php  echo __('Forma de Pagamentos'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['fornome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['fortipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia Faturamento'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['formesdia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prazo Fixo'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forprazofixo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forsigla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forsituacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contábil'); ?></dt>
		<dd>
			<?php echo h($formapgto['Formapgto']['forcontabil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $formapgto['Formapgto']['forcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $formapgto['Formapgto']['forcodigo']), null, __('Deseja excluir# %s?', $formapgto['Formapgto']['forcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Lançamentos no Caixa'); ?></h3>
	<?php if (!empty($formapgto['Lctos'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Lançamento'); ?></th>
		<th><?php echo __('Documento'); ?></th>
		<th><?php echo __('Operação'); ?></th>
                <th><?php echo __('Valor'); ?></th>
                <th><?php echo __('Histórico'); ?></th>
                <th><?php echo __('Data'); ?></th>
                <th><?php echo __('Hora'); ?></th> 
		<th class="actions"><?php echo __('Menu'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($formapgto['Lctos'] as $formapgto): ?>
		<tr>
			<td><?php echo $formapgto['cailctcodigo']; ?></td>
			<td><?php echo $formapgto['cailctdcto']; ?></td>
			<td><?php echo $formapgto['cailctoperacao']; ?></td>
                        <td><?php echo  $this->Locale->currency($formapgto['cailctvalor']); ?></td>
                        <td><?php echo $formapgto['cailcthistorico']; ?></td>
                        <td><?php echo  $this->Locale->date($formapgto['cailctdata']); ?></td>
                        <td><?php echo $formapgto['cailcthora']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'caixalctos', 'action' => 'view', $formapgto['cailctformapgto'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'caixalctos', 'action' => 'edit', $formapgto['cailctformapgto'])); ?>
				<?php echo $this->Form->postLink(__('Deletar'), array('controller' => 'caixalctos', 'action' => 'delete', $formapgto['cailctformapgto']), null, __('Deseja excluir# %s?', $formapgto['cailctformapgto'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Novo Lançamento'), array('controller' => 'caixalctos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>