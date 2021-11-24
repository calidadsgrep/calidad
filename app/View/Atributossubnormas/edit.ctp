<div class="atributossubnormas form">
<?php echo $this->Form->create('Atributossubnorma'); ?>
	<fieldset>
		<legend><?php echo __('Edit Atributossubnorma'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('subnorma_id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Atributossubnorma.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Atributossubnorma.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Atributossubnormas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
