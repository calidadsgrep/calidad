<div class="listachequeos form">
<?php echo $this->Form->create('Listachequeo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Listachequeo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('planauditoria_id');
		echo $this->Form->input('debe_id');
		echo $this->Form->input('observacion');
		echo $this->Form->input('hallazgos');
		echo $this->Form->input('aspectospositivos');
		echo $this->Form->input('observacion2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Listachequeo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Listachequeo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Listachequeos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Debes'), array('controller' => 'debes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Debe'), array('controller' => 'debes', 'action' => 'add')); ?> </li>
	</ul>
</div>
