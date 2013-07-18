<div class="bancos view">
<?php echo $this->html->script("jquery", array('inline'=>false)); ?>
<?php echo $this->Javascript->link('jquery.jeditable.mini'); ?>
<h2><?php  echo __('Banco'); ?></h2>
	<dl>
		<dt><?php echo __('Código'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['bancodigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<div class="edit" id="bannome"><?php echo h($banco['Banco']['bannome']); ?></div>
			<?php
			echo $this->Ajax->editor(
			    "bannome", 
			    array( 
				'controller' => 'Bancos', 
				'action' => 'edit2',
			    ), 
			    array(
				'indicator' => '<img src="/empresarial2/img/load.gif">',
				'submit' => '<img src="/empresarial2/img/bullet_disk.png">',
				'style' => 'inherit',
				'submitdata' => array('bancodigo'=> h($banco['Banco']['bancodigo'])),
				'tooltip'   => 'Clique para editar'
				)
			);
			?> 			
		</dd>

	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $banco['Banco']['bancodigo'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $banco['Banco']['bancodigo']), null, __('Are you sure you want to delete # %s?', $banco['Banco']['bancodigo'])); ?> </li>
		<li><?php echo $this->Html->link(__('List'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New'), array('action' => 'add')); ?> </li>
	</ul>
</div>
