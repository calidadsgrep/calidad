<div class="auditoriasNormagenerals index">
	<h2><?php echo __('Auditorias Normagenerals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('auditoria_id'); ?></th>
			<th><?php echo $this->Paginator->sort('normageneral_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($auditoriasNormagenerals as $auditoriasNormageneral): ?>
	<tr>
		<td><?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($auditoriasNormageneral['Auditoria']['id'], array('controller' => 'auditorias', 'action' => 'view', $auditoriasNormageneral['Auditoria']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($auditoriasNormageneral['Normageneral']['id'], array('controller' => 'normagenerals', 'action' => 'view', $auditoriasNormageneral['Normageneral']['id'])); ?>
		</td>
		<td><?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['created']); ?>&nbsp;</td>
		<td><?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $auditoriasNormageneral['AuditoriasNormageneral']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $auditoriasNormageneral['AuditoriasNormageneral']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $auditoriasNormageneral['AuditoriasNormageneral']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditoriasNormageneral['AuditoriasNormageneral']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Auditorias Normageneral'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
	</ul>
</div>
