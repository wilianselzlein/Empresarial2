<div class="caixalctos view">
<h2><?php  echo __('Lançamento no Caixa'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Documento'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctdcto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operação'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctoperacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctvalor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma de Pgto'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctformapgto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Histórico'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailcthistorico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailctdata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hora'); ?></dt>
		<dd>
			<?php echo h($caixalcto['Caixalcto']['cailcthora']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $caixalcto['Caixalcto']['cailctcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deleta'), array('action' => 'delete', $caixalcto['Caixalcto']['cailctcodigo']), null, __('Deseja excluir# %s?', $caixalcto['Caixalcto']['cailctcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Formas de Pgtos'), array('controller' => 'formapgtos', 'action' => 'index')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Forma de Pagamento Relacionada'); ?></h3>
	<?php if (!empty($caixalcto['Formapgto'])): ?>
		<dl>
			<dt><?php echo __('Código'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['forcodigo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['fornome']; ?>
&nbsp;</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['fortipo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Dia Faturamento'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['formesdia']; ?>
&nbsp;</dd>
		<dt><?php echo __('Prazo Fixo'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['forprazofixo']; ?>
&nbsp;</dd>
		<dt><?php echo __('Sigla'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['forsigla']; ?>
&nbsp;</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['forsituacao']; ?>
&nbsp;</dd>
		<dt><?php echo __('Contábil'); ?></dt>
		<dd>
	<?php echo $caixalcto['Formapgto']['forcontabil']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar'), array('controller' => 'formapgtos', 'action' => 'edit', $caixalcto['Formapgto']['forcodigo'])); ?></li>
			</ul>
		</div>
	</div>
	