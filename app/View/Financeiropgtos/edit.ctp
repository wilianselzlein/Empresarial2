<div class="financeiropgtos form">
<?php echo $this->Form->create('Financeiropgto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pagamento/Recebimento'); ?></legend>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgregistro', array('label' => 'Registro'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgpgto', array('label' => 'Pagamento'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finpgtipo', array('type' => 'select', 'label' => 'Tipo','options'=> array('P' => 'Parcial', 'Q' => 'Quitar')));?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgdata', array('label' => 'Data', 'dateFormat' => 'DMY'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgvalorpago', array('label' => 'Valor'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finpgdesconto', array('label' => 'Desconto'));?>
		    </td>
		</tr>
		</table>	
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgacrescimo', array('label' => 'Acréscimo'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgtaxa', array('label' => 'Taxa'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			<?php echo $this->Form->input('finpgliquido', array('label' => 'Líquido'));?>
		    </td>
		</tr>
		</table>
                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom: 0px">
		<tr style="padding: 0px;">
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgtipocob', array('type' => 'select', 'label' => 'Tipo de Cobs.','options' => $tipocobs));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="25%">
			<?php echo $this->Form->input('finpgconta', array('label' => 'Conta'));?>
		    </td>
		    <td style="padding: 0px; border-bottom:0px" width="50%">
			
		    </td>
		</tr>
		</table>               
		<?php echo $this->Form->input('finobs', array('label' => 'Observação'));?>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menu'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $this->Form->value('Financeiropgto.finpgregistroid')), null, __('Deseja excluir# %s?', $this->Form->value('Financeiropgto.finpgregistroid'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Tipos de Cobs'), array('controller' => 'tipocobs', 'action' => 'index')); ?> </li>
	</ul>
</div>
