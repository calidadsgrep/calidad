<div class="atributossubnormas index">
	<h2><?php echo __('Atributossubnormas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subnorma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($atributossubnormas as $atributossubnorma): ?>
	<tr>
		<td><?php echo h($atributossubnorma['Atributossubnorma']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atributossubnorma['Subnorma']['id'], array('controller' => 'subnormas', 'action' => 'view', $atributossubnorma['Subnorma']['id'])); ?>
		</td>
		<td><?php echo h($atributossubnorma['Atributossubnorma']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($atributossubnorma['Atributossubnorma']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($atributossubnorma['Atributossubnorma']['created']); ?>&nbsp;</td>
		<td><?php echo h($atributossubnorma['Atributossubnorma']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $atributossubnorma['Atributossubnorma']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $atributossubnorma['Atributossubnorma']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $atributossubnorma['Atributossubnorma']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $atributossubnorma['Atributossubnorma']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
