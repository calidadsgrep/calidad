<div class="auditoriasNormagenerals form">
<?php echo $this->Form->create('AuditoriasNormageneral'); ?>
	<fieldset>
		<legend><?php echo __('Add Auditorias Normageneral'); ?></legend>
	<?php
		echo $this->Form->input('auditoria_id');
		echo $this->Form->input('normageneral_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Auditorias Normagenerals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
	</ul>
</div>
