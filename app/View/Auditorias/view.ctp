<div class="auditorias view">
<h2><?php echo __('Auditoria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditoria['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $auditoria['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['proceso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ResponsableProceso'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['responsableProceso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaAplicacion'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['fechaAplicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HoraInicio'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['horaInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HoraFin'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['horaFin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($auditoria['Auditoria']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditoria'), array('action' => 'edit', $auditoria['Auditoria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditoria'), array('action' => 'delete', $auditoria['Auditoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditoria['Auditoria']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Normagenerals'); ?></h3>
	<?php if (!empty($auditoria['Normageneral'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($auditoria['Normageneral'] as $normageneral): ?>
		<tr>
			<td><?php echo $normageneral['id']; ?></td>
			<td><?php echo $normageneral['descripcion']; ?></td>
			<td><?php echo $normageneral['created']; ?></td>
			<td><?php echo $normageneral['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'normagenerals', 'action' => 'view', $normageneral['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'normagenerals', 'action' => 'edit', $normageneral['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'normagenerals', 'action' => 'delete', $normageneral['id']), array('confirm' => __('Are you sure you want to delete # %s?', $normageneral['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
