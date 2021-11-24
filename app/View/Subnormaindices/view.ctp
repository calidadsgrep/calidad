<div class="subnormaindices view">
<h2><?php echo __('Subnormaindex'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subnormaindex['Subnormaindex']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($subnormaindex['Subnormaindex']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subnorma'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subnormaindex['Subnorma']['id'], array('controller' => 'subnormas', 'action' => 'view', $subnormaindex['Subnorma']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($subnormaindex['Subnormaindex']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subnormaindex['Subnormaindex']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($subnormaindex['Subnormaindex']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subnormaindex'), array('action' => 'edit', $subnormaindex['Subnormaindex']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subnormaindex'), array('action' => 'delete', $subnormaindex['Subnormaindex']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subnormaindex['Subnormaindex']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormaindices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnormaindex'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormas'), array('controller' => 'subnormas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnorma'), array('controller' => 'subnormas', 'action' => 'add')); ?> </li>
	</ul>
</div>
