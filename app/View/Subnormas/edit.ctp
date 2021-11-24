<div class="subnormas form">
<?php echo $this->Form->create('Subnorma'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subnorma'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('normageneral_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('numero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subnorma.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Subnorma.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atributossubnormas'), array('controller' => 'atributossubnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('controller' => 'atributossubnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
