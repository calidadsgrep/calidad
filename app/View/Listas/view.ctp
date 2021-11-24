<div class="listas view">
<h2><?php echo __('Lista'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planauditoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lista['Planauditoria']['proceso'], array('controller' => 'planauditorias', 'action' => 'view', $lista['Planauditoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Debe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($lista['Debe']['id'], array('controller' => 'debes', 'action' => 'view', $lista['Debe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lista['Lista']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lista'), array('action' => 'edit', $lista['Lista']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lista'), array('action' => 'delete', $lista['Lista']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lista['Lista']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Listas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lista'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Debes'), array('controller' => 'debes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Debe'), array('controller' => 'debes', 'action' => 'add')); ?> </li>
	</ul>
</div>
