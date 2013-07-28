<div class="empresas view">
<h2><?php  echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empendereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empbairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empfone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empfax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emphomepage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CNPJ'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IE'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IM'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RG'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgão Exp.'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emporgaoexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Exp.'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empdataemprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcontato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contador'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcontador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CRC Contador'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcrccontador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emptitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo Titular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcargotitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF Titular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcpftitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reg Junta'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empregjunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Reg. Junta'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empdataregjunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empobs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['empcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['empcodigo']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['empcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
