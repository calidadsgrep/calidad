<div class="planauditorias form">
<?php echo $this->Form->create('Planauditoria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Planauditoria'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proceso');
		echo $this->Form->input('requisitosauditar');
		echo $this->Form->input('auditor_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('horaInicio');
		echo $this->Form->input('horafin');
		echo $this->Form->input('cargo');
		echo $this->Form->input('reponsablecargo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Planauditoria.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Planauditoria.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditors'), array('controller' => 'auditors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditor'), array('controller' => 'auditors', 'action' => 'add')); ?> </li>
	</ul>
</div>
