<div class="col-md-10  ">
	<h2><?php echo __('Causas'); ?></h2>
	<a href="<?php echo APP_WWW . "/informes/index/".$planauditoria_id.'/'?>" <i class=" btn btn-success  fa fa-arrow-circle-left"  aria-hidden="true" ></i> Volver</a>
	<br><br>
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre','Descripción de la Causas'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php  $i=1;
	foreach ($causas as $causa): ?>
	<tr>
		
		<td>
			<?php echo $i; ?>
		</td>
		<td><?php echo h($causa['Causa']['nombre']); ?>&nbsp;</td>
		
		<td class="actions">

<a onclick="loadResource(<?php echo $causa['Causa']['id']; ?>, '<?php echo APP_WWW . "actividades/add/".$causa['Causa']['id'].'/'.$hallasgo_id .'/'.$planauditoria_id.'/'?>', 'lista')"><span class="fa fa-plus-square-o fa-lg"  aria-hidden="true" title=" Agregar Plan de Acción Correctivo (Acciones que van a eliminar la o las causas identificadas)"></span></a>

<a onclick="loadResource(<?php echo $causa['Causa']['id']; ?>, '<?php echo APP_WWW . "actividades/index/".$causa['Causa']['id'].'/'.$i.'/'?>', 'lista')"><span class="fa fa-eye fa-lg"  aria-hidden="true" title=" Ver Plan de Acción Correctivo (Acciones que van a eliminar la o las causas identificadas)"></span></a>

<a onclick="loadResource(<?php echo $causa['Causa']['id']; ?>, '<?php echo APP_WWW . "causas/edit/".'/'.$planauditoria_id.'/'?>', 'lista')"><span class="fa fa-edit fa-lg"  aria-hidden="true" title="(Actualiza la causa identificada)"></span></a>

		<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $causa['Causa']['id']),array('class' => 'fa fa-trash fa-lg'), array('confirm' => __('Are you sure you want to delete # %s?', $causa['Causa']['id']))); ?>
		</td>
	</tr>
<?php  $i++; endforeach; ?>
	</tbody>
	</table>
<div class="col-md-12" id="lista" name='lista'></div>

	<p>

	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pag {:page} de {:pages}, mostrando {:current} registros  {:count} en total, empezando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<?php echo $this->Ajax->getLoadResource(); ?>

