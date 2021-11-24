<div class="listachequeos view">
<h2><?php echo __('Listachequeo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planauditoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listachequeo['Planauditoria']['id'], array('controller' => 'planauditorias', 'action' => 'view', $listachequeo['Planauditoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Debe'); ?></dt>
		<dd>
			<?php echo $this->Html->link($listachequeo['Debe']['id'], array('controller' => 'debes', 'action' => 'view', $listachequeo['Debe']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hallazgos'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['hallazgos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aspectospositivos'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['aspectospositivos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion2'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['observacion2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($listachequeo['Listachequeo']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Listachequeo'), array('action' => 'edit', $listachequeo['Listachequeo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Listachequeo'), array('action' => 'delete', $listachequeo['Listachequeo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $listachequeo['Listachequeo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Listachequeos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listachequeo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Debes'), array('controller' => 'debes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Debe'), array('controller' => 'debes', 'action' => 'add')); ?> </li>
	</ul>
</div>
