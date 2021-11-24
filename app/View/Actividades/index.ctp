<div class="actividades index">
	<h2><?php echo __('Planes de Acción Correctiva'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre','Plan de Acción'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php $p=1;
	foreach ($actividades as $actividade): ?>
	<tr>
		
		<td><?php echo $posicion.'-'.$p; ?>&nbsp;</td>
		<td><?php echo h($actividade['Actividade']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $actividade['Actividade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $actividade['Actividade']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $actividade['Actividade']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actividade['Actividade']['id']))); ?>
		</td>
	</tr>
<?php $p++;
endforeach; ?>
	</tbody>
	</table>
	
</div>
