<div class="debes view">
<h2><?php echo __('Debe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($debe['Debe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subnormaindice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($debe['Subnormaindice']['id'], array('controller' => 'subnormaindices', 'action' => 'view', $debe['Subnormaindice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numeral'); ?></dt>
		<dd>
			<?php echo h($debe['Debe']['numeral']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($debe['Debe']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Debe'), array('action' => 'edit', $debe['Debe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Debe'), array('action' => 'delete', $debe['Debe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $debe['Debe']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Debes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Debe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subnormaindices'), array('controller' => 'subnormaindices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subnormaindice'), array('controller' => 'subnormaindices', 'action' => 'add')); ?> </li>
	</ul>
</div>
