<div class="empresas view">
<h2><?php echo __('Empresa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RazonSocial'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['razonSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nit'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['nit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auditor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($empresa['Auditor']['id'], array('controller' => 'auditors', 'action' => 'view', $empresa['Auditor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($empresa['Empresa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Empresa'), array('action' => 'edit', $empresa['Empresa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Empresa'), array('action' => 'delete', $empresa['Empresa']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $empresa['Empresa']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditors'), array('controller' => 'auditors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditor'), array('controller' => 'auditors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Auditorias'); ?></h3>
	<?php if (!empty($empresa['Auditoria'])): ?>
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
	<?php foreach ($empresa['Auditoria'] as $auditoria): ?>
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
