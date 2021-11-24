<div class="actividades view">
<h2><?php echo __('Actividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Causa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actividade['Causa']['id'], array('controller' => 'causas', 'action' => 'view', $actividade['Causa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dir'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['dir']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($actividade['Actividade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actividade'), array('action' => 'edit', $actividade['Actividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actividade'), array('action' => 'delete', $actividade['Actividade']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividade['Actividade']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causas'), array('controller' => 'causas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Causa'), array('controller' => 'causas', 'action' => 'add')); ?> </li>
	</ul>
</div>
