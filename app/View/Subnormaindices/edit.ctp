<div class="subnormaindices form">
<?php echo $this->Form->create('Subnormaindex'); ?>
	<fieldset>
		<legend><?php echo __('Edit Subnormaindex'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('subnorma_id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Subnormaindex.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Subnormaindex.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormaindices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
