<div class="col-md-6 col-md-offset-3">
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($procesos as $proceso): ?>
	<tr>
		
		<td><?php echo h($proceso['Proceso']['nombre']); ?>&nbsp;</td>
		
		<td class="actions">
			 <a onclick="loadResource(<?php echo $proceso['Proceso']['id']; ?>, '<?php echo APP_WWW . "procesos/edit".'/'?>', 'lista')" ><span class="glyphicon glyphicon-edit" title="Editar Datos"></span></a>
			<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $proceso['Proceso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $proceso['Proceso']['id']),'class'=>'glyphicon glyphicon-trash', 'title'=>'Eliminar Proceso')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    <div class="col-md-12" id="lista" name='lista'></div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pag {:page} of {:pages}, mostrando {:current} registros  {:count} totales, empezando en el registro {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php echo $this->Ajax->getLoadResource(); ?>
