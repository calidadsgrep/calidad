<div class="causas view">
<h2><?php echo __('Causa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Informe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causa['Informe']['id'], array('controller' => 'informes', 'action' => 'view', $causa['Informe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($causa['Causa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Causa'), array('action' => 'edit', $causa['Causa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Causa'), array('action' => 'delete', $causa['Causa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $causa['Causa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Causas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Causa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Informes'), array('controller' => 'informes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informe'), array('controller' => 'informes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('controller' => 'actividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Actividades'); ?></h3>
	<?php if (!empty($causa['Actividade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Causa Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Dir'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($causa['Actividade'] as $actividade): ?>
		<tr>
			<td><?php echo $actividade['id']; ?></td>
			<td><?php echo $actividade['causa_id']; ?></td>
			<td><?php echo $actividade['nombre']; ?></td>
			<td><?php echo $actividade['dir']; ?></td>
			<td><?php echo $actividade['filename']; ?></td>
			<td><?php echo $actividade['created']; ?></td>
			<td><?php echo $actividade['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'actividades', 'action' => 'view', $actividade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'actividades', 'action' => 'edit', $actividade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'actividades', 'action' => 'delete', $actividade['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividade['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Actividade'), array('controller' => 'actividades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
