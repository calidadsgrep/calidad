<div class="subnormas view">
<h2><?php echo __('Subnorma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subnorma['Subnorma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Normageneral'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subnorma['Normageneral']['descripcion'], array('controller' => 'normagenerals', 'action' => 'view', $subnorma['Normageneral']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($subnorma['Subnorma']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($subnorma['Subnorma']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subnorma['Subnorma']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subnorma['Subnorma']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subnorma'), array('action' => 'edit', $subnorma['Subnorma']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subnorma'), array('action' => 'delete', $subnorma['Subnorma']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subnorma['Subnorma']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atributossubnormas'), array('controller' => 'atributossubnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('controller' => 'atributossubnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Atributossubnormas'); ?></h3>
	<?php if (!empty($subnorma['Atributossubnorma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Subnorma Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subnorma['Atributossubnorma'] as $atributossubnorma): ?>
		<tr>
			<td><?php echo $atributossubnorma['id']; ?></td>
			<td><?php echo $atributossubnorma['subnorma_id']; ?></td>
			<td><?php echo $atributossubnorma['descripcion']; ?></td>
			<td><?php echo $atributossubnorma['tipo']; ?></td>
			<td><?php echo $atributossubnorma['created']; ?></td>
			<td><?php echo $atributossubnorma['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'atributossubnormas', 'action' => 'view', $atributossubnorma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'atributossubnormas', 'action' => 'edit', $atributossubnorma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'atributossubnormas', 'action' => 'delete', $atributossubnorma['id']), array('confirm' => __('Are you sure you want to delete # %s?', $atributossubnorma['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('controller' => 'atributossubnormas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
