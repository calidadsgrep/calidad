<div class="subnormaindices index">
	<h2><?php echo __('Subnormaindices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('subnorma_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subnormaindices as $subnormaindex): ?>
	<tr>
		<td><?php echo h($subnormaindex['Subnormaindex']['id']); ?>&nbsp;</td>
		<td><?php echo h($subnormaindex['Subnormaindex']['numero']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subnormaindex['Subnorma']['id'], array('controller' => 'subnormas', 'action' => 'view', $subnormaindex['Subnorma']['id'])); ?>
		</td>
		<td><?php echo h($subnormaindex['Subnormaindex']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($subnormaindex['Subnormaindex']['created']); ?>&nbsp;</td>
		<td><?php echo h($subnormaindex['Subnormaindex']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subnormaindex['Subnormaindex']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subnormaindex['Subnormaindex']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subnormaindex['Subnormaindex']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subnormaindex['Subnormaindex']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Subnormaindex'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
