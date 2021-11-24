<div class="causas form">
<?php echo $this->Form->create('Causa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Causa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('informe_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('filename');
		echo $this->Form->input('dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Causa.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Causa.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Causas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Informes'), array('controller' => 'informes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informe'), array('controller' => 'informes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
