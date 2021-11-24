<div class="procesos view">
<h2><?php echo __('Proceso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proceso['Proceso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proceso['Empresa']['razonSocial'], array('controller' => 'empresas', 'action' => 'view', $proceso['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proceso['Proceso']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proceso['Proceso']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proceso'), array('action' => 'edit', $proceso['Proceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proceso'), array('action' => 'delete', $proceso['Proceso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $proceso['Proceso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
