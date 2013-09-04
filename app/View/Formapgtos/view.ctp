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
