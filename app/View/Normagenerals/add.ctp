<div class="normagenerals form">
<?php echo $this->Form->create('Normageneral'); ?>
	<fieldset>
		<legend><?php echo __('Add Normageneral'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Auditoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Normagenerals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
