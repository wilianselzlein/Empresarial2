<div class="financeiropgtos view">
<h2><?php  echo __('Pagamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgregistro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagamento'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgpgto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgtipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgdata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor Pago'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgvalorpago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desconto'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgdesconto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acréscimo'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgacrescimo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxa'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgtaxa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Líquido'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgliquido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo de Cobrança'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financeiropgto['Tipocob']['tipcobnome'], array('controller' => 'tipocobs', 'action' => 'view', $financeiropgto['Tipocob']['tipcobcodigo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conta'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpgconta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observação'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finobs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lcto Cx 01'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpglctocx01']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lcto Cx 02'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpglctocx02']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lcto Cx 03'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpglctocx03']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lcto Cx 04'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpglctocx04']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lcto Cx 05'); ?></dt>
		<dd>
			<?php echo h($financeiropgto['Financeiropgto']['finpglctocx05']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $financeiropgto['Financeiropgto']['finpgid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financeiropgto['Financeiropgto']['finpgid']), null, __('Deseja excluir# %s?', $financeiropgto['Financeiropgto']['finpgid'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Tipos de Cobs.'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
	</ul>
</div>
