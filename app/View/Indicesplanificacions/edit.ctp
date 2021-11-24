<div class="indicesplanificacions form">
<?php echo $this->Form->create('Indicesplanificacion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Indicesplanificacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sudnormaindice_id');
		echo $this->Form->input('planauditoria_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Indicesplanificacion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Indicesplanificacion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Indicesplanificacions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
