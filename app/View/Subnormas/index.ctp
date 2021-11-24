<div class="subnormas index">
	<h2><?php echo __('Subnormas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('normageneral_id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subnormas as $subnorma): ?>
	<tr>
		<td><?php echo h($subnorma['Subnorma']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subnorma['Normageneral']['descripcion'], array('controller' => 'normagenerals', 'action' => 'view', $subnorma['Normageneral']['id'])); ?>
		</td>
		<td><?php echo h($subnorma['Subnorma']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($subnorma['Subnorma']['numero']); ?>&nbsp;</td>
		<td><?php echo h($subnorma['Subnorma']['created']); ?>&nbsp;</td>
		<td><?php echo h($subnorma['Subnorma']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subnorma['Subnorma']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subnorma['Subnorma']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subnorma['Subnorma']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subnorma['Subnorma']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atributossubnormas'), array('controller' => 'atributossubnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('controller' => 'atributossubnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
