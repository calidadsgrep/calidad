<div class="normagenerals view">
<h2><?php echo __('Normageneral'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($normageneral['Normageneral']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($normageneral['Normageneral']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($normageneral['Normageneral']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($normageneral['Normageneral']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Normageneral'), array('action' => 'edit', $normageneral['Normageneral']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Normageneral'), array('action' => 'delete', $normageneral['Normageneral']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $normageneral['Normageneral']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Subnormas'); ?></h3>
	<?php if (!empty($normageneral['Subnorma'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Normageneral Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($normageneral['Subnorma'] as $subnorma): ?>
		<tr>
			<td><?php echo $subnorma['id']; ?></td>
			<td><?php echo $subnorma['normageneral_id']; ?></td>
			<td><?php echo $subnorma['descripcion']; ?></td>
			<td><?php echo $subnorma['numero']; ?></td>
			<td><?php echo $subnorma['created']; ?></td>
			<td><?php echo $subnorma['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subnormas', 'action' => 'view', $subnorma['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subnormas', 'action' => 'edit', $subnorma['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subnormas', 'action' => 'delete', $subnorma['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subnorma['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Auditorias'); ?></h3>
	<?php if (!empty($normageneral['Auditoria'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Proceso'); ?></th>
		<th><?php echo __('ResponsableProceso'); ?></th>
		<th><?php echo __('FechaAplicacion'); ?></th>
		<th><?php echo __('HoraInicio'); ?></th>
		<th><?php echo __('HoraFin'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($normageneral['Auditoria'] as $auditoria): ?>
		<tr>
			<td><?php echo $auditoria['id']; ?></td>
			<td><?php echo $auditoria['empresa_id']; ?></td>
			<td><?php echo $auditoria['proceso']; ?></td>
			<td><?php echo $auditoria['responsableProceso']; ?></td>
			<td><?php echo $auditoria['fechaAplicacion']; ?></td>
			<td><?php echo $auditoria['horaInicio']; ?></td>
			<td><?php echo $auditoria['horaFin']; ?></td>
			<td><?php echo $auditoria['created']; ?></td>
			<td><?php echo $auditoria['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'auditorias', 'action' => 'view', $auditoria['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'auditorias', 'action' => 'edit', $auditoria['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'auditorias', 'action' => 'delete', $auditoria['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditoria['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
