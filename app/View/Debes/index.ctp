<div class="debes index">
	<h2><?php echo __('Debes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('subnormaindice_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numeral'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($debes as $debe): ?>
	<tr>
		<td><?php echo h($debe['Debe']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($debe['Subnormaindice']['id'], array('controller' => 'subnormaindices', 'action' => 'view', $debe['Subnormaindice']['id'])); ?>
		</td>
		<td><?php echo h($debe['Debe']['numeral']); ?>&nbsp;</td>
		<td><?php echo h($debe['Debe']['descripcion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $debe['Debe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $debe['Debe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $debe['Debe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $debe['Debe']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Debe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Subnormaindices'), array('controller' => 'subnormaindices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnormaindice'), array('controller' => 'subnormaindices', 'action' => 'add')); ?> </li>
	</ul>
</div>
