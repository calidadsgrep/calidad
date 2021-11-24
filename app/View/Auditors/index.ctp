
	<h2><?php echo __('Registrar Auditor'); ?></h2>
        <br>
        <li><?php echo $this->Html->link(__('Nuevo Auditor'), array('action' => 'add')); ?></li>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario'); ?></th>
			
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($auditors as $auditor): ?>
	<tr>
		
		<td><?php echo h($auditor['Auditor']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['correo']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($auditor['Auditor']['usuario']); ?>&nbsp;</td>
		
		<td class="acciones">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $auditor['Auditor']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $auditor['Auditor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $auditor['Auditor']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $auditor['Auditor']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

