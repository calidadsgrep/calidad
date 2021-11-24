<div class="col-md-10 ">
	<h2>Detalle de Auditoria por Procesos</h2>
        <table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('proceso','Proceso'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha','Fecha Realización'); ?></th>
			<th><?php echo $this->Paginator->sort('horaInicio','Hora Inicio'); ?></th>
			<th><?php echo $this->Paginator->sort('horaFin','Hora Fin'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo','Cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('reponsablecargo','Resposable Del Cargo'); ?></th>
			
			<th class="actions"><?php echo __('Desarrollo de Auditoria'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php
	 //debug($planauditorias);
	   foreach ($planauditorias as $planauditoria): ?>
	<tr>
		<td><?php echo h($planauditoria['Proceso']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($planauditoria['Planauditoria']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($planauditoria['Planauditoria']['horaInicio']); ?>&nbsp;</td>
		<td><?php echo h($planauditoria['Planauditoria']['horaFin']); ?>&nbsp;</td>
		<td><?php echo h($planauditoria['Planauditoria']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($planauditoria['Planauditoria']['reponsablecargo']); ?>&nbsp;</td>
		
		<td class="actions">
<?php if($user['Usuario']['nivel_id']!=4):?>

                    <a href="<?php echo APP_WWW . "planauditorias/listachequeo/".$planauditoria['Planauditoria']['id']?>"><i class="fa fa-check-square-o fa-lg" title="validar lista de chequeo" aria-hidden="true" style="color: black"></i></a>&nbsp;
<!--<a href="<?php echo APP_WWW . "planauditorias/edit/".$planauditoria['Planauditoria']['id']?>"><i class="fa fa-edit fa-lg" title="Editar lista chequeos" aria-hidden="true" style="color: black"></i></a>&nbsp;--> 
<a href="<?php echo APP_WWW . "listas/edit/".$planauditoria['Planauditoria']['id'].'/'?>"><i class="fa fa-indent fa-lg" title="Generar Hallazgos" aria-hidden="true" style="color: black"></i></a>&nbsp;
                    
                    <a href="<?php echo APP_WWW . "informes/index/".$planauditoria['Planauditoria']['id']?>"><i class="fa fa-list-ol  fa-lg" title="Lista de Hallazgos" aria-hidden="true" style="color: black"></i></a>&nbsp;
                    
                    <?php echo $this->Form->postLink(__(''), array('action' => 'delete', $planauditoria['Planauditoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planauditoria['Planauditoria']['id']),'class'=>'fa fa-trash fa-lg','style'=>'color: black', 'title'=>'Eliminar auditoria del proceso'));?>
                <?php else:?> 
                <a href="<?php echo APP_WWW . "informes/index/".$planauditoria['Planauditoria']['id']?>"><i class="fa fa-list-ol  fa-lg" title="Lista de Hallazgos" aria-hidden="true" style="color: black"></i></a>&nbsp;
               
                   
                <?php endif?>  
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<h3>Enviar Notificación</h3>
	<div class="btn-group btn-group-justified">
	<?php if($user['Usuario']['nivel_id']!=4):?>
	<a href="<?php echo APP_WWW . "informes/indexgenerar/".$planauditoria['Planauditoria']['id'].'/'.'GenerarHallazgos'?>" class="btn btn-primary"> <i class="fa fa-external-link" aria-hidden="true"></i> Notificación de Hallazgo</a>
	 <a href="<?php echo APP_WWW . "informes/indexgenerar/".$planauditoria['Planauditoria']['id'].'/'.'ValidacionHallazgo'?>" class="btn btn-primary"><i class="fa fa-external-link" aria-hidden="true"></i> Notificación de Validación</a>
	 <?php else:?>
	 <a href="<?php echo APP_WWW . "informes/indexgenerar/".$planauditoria['Planauditoria']['id'].'/'.'RespuestaHallazgo'?>" class="btn btn-primary"><i class="fa fa-external-link" aria-hidden="true"></i> Notificación de Respuesta</a> 
	  <?php endif?>  


