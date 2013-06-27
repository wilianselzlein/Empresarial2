<div class="empresas view">
<h2><?php  echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Empcodigo'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empnome'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empnome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empendereco'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empendereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empbairro'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empbairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $empresa['Cidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcep'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empfone'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empfone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empfax'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empfax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empemail'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emphomepage'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emphomepage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcnpj'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcpf'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empie'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empim'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emprg'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emporgaoexprg'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emporgaoexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empdataemprg'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empdataemprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcontato'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcontato']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcontador'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcontador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcrccontador'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcrccontador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emptitular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['emptitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcargotitular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcargotitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empcpftitular'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empcpftitular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empregjunta'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empregjunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empdataregjunta'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empdataregjunta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empobs'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['empobs']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['empcodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['empcodigo']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['empcodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
