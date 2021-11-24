<div class="indicesplanificacions view">
<h2><?php echo __('Indicesplanificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indicesplanificacion['Indicesplanificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sudnormaindice Id'); ?></dt>
		<dd>
			<?php echo h($indicesplanificacion['Indicesplanificacion']['sudnormaindice_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planauditoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($indicesplanificacion['Planauditoria']['id'], array('controller' => 'planauditorias', 'action' => 'view', $indicesplanificacion['Planauditoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($indicesplanificacion['Indicesplanificacion']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($indicesplanificacion['Indicesplanificacion']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Indicesplanificacion'), array('action' => 'edit', $indicesplanificacion['Indicesplanificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Indicesplanificacion'), array('action' => 'delete', $indicesplanificacion['Indicesplanificacion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $indicesplanificacion['Indicesplanificacion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicesplanificacions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicesplanificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
