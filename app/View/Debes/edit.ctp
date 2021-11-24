<div class="debes form">
<?php echo $this->Form->create('Debe'); ?>
	<fieldset>
		<legend><?php echo __('Edit Debe'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subnormaindice_id');
		echo $this->Form->input('numeral');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Debe.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Debe.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Debes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormaindices'), array('controller' => 'subnormaindices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnormaindice'), array('controller' => 'subnormaindices', 'action' => 'add')); ?> </li>
	</ul>
</div>
