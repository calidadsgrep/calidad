<div class="auditoriasNormagenerals view">
<h2><?php echo __('Auditorias Normageneral'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auditoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditoriasNormageneral['Auditoria']['id'], array('controller' => 'auditorias', 'action' => 'view', $auditoriasNormageneral['Auditoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Normageneral'); ?></dt>
		<dd>
			<?php echo $this->Html->link($auditoriasNormageneral['Normageneral']['id'], array('controller' => 'normagenerals', 'action' => 'view', $auditoriasNormageneral['Normageneral']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($auditoriasNormageneral['AuditoriasNormageneral']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auditorias Normageneral'), array('action' => 'edit', $auditoriasNormageneral['AuditoriasNormageneral']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Auditorias Normageneral'), array('action' => 'delete', $auditoriasNormageneral['AuditoriasNormageneral']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditoriasNormageneral['AuditoriasNormageneral']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias Normagenerals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditorias Normageneral'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Auditorias'), array('controller' => 'auditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auditoria'), array('controller' => 'auditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Normagenerals'), array('controller' => 'normagenerals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Normageneral'), array('controller' => 'normagenerals', 'action' => 'add')); ?> </li>
	</ul>
</div>
