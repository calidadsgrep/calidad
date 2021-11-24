<div class="atributossubnormas view">
<h2><?php echo __('Atributossubnorma'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($atributossubnorma['Atributossubnorma']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subnorma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atributossubnorma['Subnorma']['id'], array('controller' => 'subnormas', 'action' => 'view', $atributossubnorma['Subnorma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($atributossubnorma['Atributossubnorma']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($atributossubnorma['Atributossubnorma']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($atributossubnorma['Atributossubnorma']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($atributossubnorma['Atributossubnorma']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atributossubnorma'), array('action' => 'edit', $atributossubnorma['Atributossubnorma']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Atributossubnorma'), array('action' => 'delete', $atributossubnorma['Atributossubnorma']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $atributossubnorma['Atributossubnorma']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Atributossubnormas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atributossubnorma'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
