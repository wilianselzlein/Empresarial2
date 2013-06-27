<div class="clientes view">
<h2><?php  echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Clicodigo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' Clidatacad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente'][' clidatacad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clipessoa'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clipessoa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clirazao'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clirazao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clifantasia'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliendereco'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliendereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clibairro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clibairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicomplemento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicomplemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clinumero'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clinumero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicep'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicxpostal'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicxpostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clifone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clifax'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicelular'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicelular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliemail'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliemailalt'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliemailalt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clihomepage'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clihomepage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicontatofin'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicontatofin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicnpj'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clicpf'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliie'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cligrupo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cligrupo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clisituacao'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clisituacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clidatanasc'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clidatanasc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Naturalidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Naturalidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Naturalidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clipai'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clipai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Climae'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['climae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clirg'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clirg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliorgaoexprg'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliorgaoexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clidataexprg'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clidataexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliobs'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliformapgto'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliformapgto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clidiafatura'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clidiafatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliim'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clitipcob'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clitipcob']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliopcaocad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliopcaocad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['clicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['clicodigo']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['clicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
