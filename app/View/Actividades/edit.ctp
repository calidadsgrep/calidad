<div class="actividades form">
<?php echo $this->Form->create('Actividade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Actividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('causa_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('dir');
		echo $this->Form->input('filename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Actividade.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Actividade.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Causas'), array('controller' => 'causas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Causa'), array('controller' => 'causas', 'action' => 'add')); ?> </li>
	</ul>
</div>
