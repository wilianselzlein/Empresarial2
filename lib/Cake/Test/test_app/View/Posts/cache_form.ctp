<div class="users form">
<!--nocache-->
	<?php echo $this->Form->create('User'); ?>
		<fieldset>
	 		<legend><?php echo __('Novo User'); ?></legend>
		<?php
			echo $this->Form->input('username');
			echo $this->Form->input('email');
			echo $this->Form->input('password');
		?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
<!--/nocache-->
</div>