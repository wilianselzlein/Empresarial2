<div class="clientes view">
<h2><?php  echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicodigo']); ?>
			&nbsp;
		</dd>
		<!--<dt><?php //echo __(' Clidatacad'); ?></dt>-->
		<!--<dd>-->
			<?php //echo h($cliente['Cliente'][' clidatacad']); ?>
			<!--&nbsp;-->
		<!--</dd>-->
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clipessoa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Razão Social'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clirazao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fantasia'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifantasia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereço'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliendereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clibairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicomplemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Número'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clinumero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Cidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cx Postal'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicxpostal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fone'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FAx'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clifax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicelular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Alt'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliemailalt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Site'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clihomepage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contato Fin.'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicontatofin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CNPJ'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clicpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('inscrição Estadual'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Grupocliente']['gruclinome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cliente']['cligrupo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Situação'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clisituacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Nasc'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($cliente['Cliente']['clidatanasc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Naturalidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Naturalidade']['cidnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Naturalidade']['cidcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pai'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clipai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mãe'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['climae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RG'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clirg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orgão Exp.'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliorgaoexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Exp.'); ?></dt>
		<dd>
			<?php echo $this->Locale->date($cliente['Cliente']['clidataexprg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma de Pagamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Formapgto']['fornome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cliente']['cliformapgto'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dia Fatura'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['clidiafatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IM'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cliim']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Cobrança'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Tipocob']['tipcobnome'], array('controller' => 'cidades', 'action' => 'view', $cliente['Cliente']['clitipcob'])); ?>
			&nbsp;
		</dd>
		<!--<dt><?php // echo __('Cliopcaocad'); ?></dt>-->
		<!--<dd>-->
			<?php //echo h($cliente['Cliente']['cliopcaocad']); ?>
			<!--&nbsp;-->
		<!--</dd>-->
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cliente['Cliente']['clicodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $cliente['Cliente']['clicodigo']), null, __('Deseja excluir# %s?', $cliente['Cliente']['clicodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cidades'), array('controller' => 'cidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cidade'), array('controller' => 'cidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
