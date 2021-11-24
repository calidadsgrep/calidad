<div class="col-md-10">
	<h2><?php echo __('Hallazgos'); ?></h2>
         <table class="table table-bordered">
	<thead>
            <tr>
                <th>Fecha</th>
                <td><?php  echo $auditoria['Auditoria']['fecha']?></td>
                <th>Tipo Auditoria</th>
                <td><?php echo $auditoria['Auditoria']['tipo_auditoria'] ?></td>
            </tr>
            <tr>
                <th >Organización</th>
                <td colspan="3"><?php echo $auditoria['Empresa']['razonSocial'] ?> </td>
                
            </tr>
            <tr>
                <th>Dirección</th>
                <td colspan="3"><?php echo $auditoria['Empresa']['municipio'] ?> </td>
            </tr>
            </thead>
        </table> 
        
        <a href="<?php echo APP_WWW . "listas/edit/".$planauditoria_id.'/'?>" <i class="fa fa-plus btn btn-success fa-lg"  aria-hidden="true" title="gererar mas hallazgos"></i> Generar hallazgos </a>
        <table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
        <tr>
        		<th><?php echo $this->Paginator->sort('lista_id','Debe'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones','Descripción del Hallazgo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_hallazgo'); ?></th>
			
			<th class="actions"><?php echo __('Desarrollo'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($informes as $informe): ?>
         <tr class="text-warning">

		<td>
			<?php 
			//debug($listas);
			//debug($subnormas);
			foreach ($listas as $lista){
			foreach ($subnormas as $subnorma){
			 if(($informe['Lista']['id'] == $lista['Lista']['id']) and ($lista['Debe']['subnormaindice_id'] == $subnorma['Subnormaindice']['id'])){
			 echo $lista['Debe']['numeral'].' '.$subnorma['Subnorma']['descripcion'] ;
			 }
			}
			}
			
			 ?>
		</td>
                <td class="text-justify"><?php echo h($informe['Lista']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($informe['Lista']['tipo']); ?>&nbsp;</td>
		
		
		<?php if($nivel==4):?>
		<td class="actions">
		<a href="<?php echo APP_WWW . "causas/add/".$informe['Informe']['id'].'/'.$planauditoria_id.'/'?>" <i class="fa fa-plus-square-o fa-lg"  aria-hidden="true" title="Agregar Descripción de Causas (Relacione la o las causas reales que dieron origen a la no conformidad)"></i></a>
		
		<a href="<?php echo APP_WWW . "informes/edit/". $informe['Informe']['id'].'/'.$planauditoria_id.'/'?>" <i class="fa fa-check-square-o fa-lg"  aria-hidden="true" title="Agregar Corrección Propuesta (Accion que van a eliminar la no conformidad)"></i></a>
		
		  
		  
		  <a href="<?php echo APP_WWW . "causas/index/".$informe['Informe']['id'].'/'.$planauditoria_id.'/'?>" <i class="fa fa-list fa-lg"  aria-hidden="true" title="  Ver lista de Causas (Relaciononadas a la causa real que dio origen a la no conformidad)"></i></a>
		  
		<a href="<?php echo APP_WWW . "informes/view/".$informe['Informe']['id'].'/'.$planauditoria_id.'/'?>" <i class="fa fa-flag-o fa-lg"  aria-hidden="true" title="Ver desarrollo del hallazgo"></i></a>
		
		</td>
		<?php endif;?>
		<?php if($nivel == 2 or $nivel == 3):?>
		<td class="actions">
		<a href="<?php echo APP_WWW . "informes/validacion/".$informe['Informe']['id'].'/'.$planauditoria_id?>" <i class="fa fa-check-square-o fa-lg"  aria-hidden="true" title="Validar hallazgo"></i></a>
		       <a href="<?php echo APP_WWW . "listas/editar/".$informe['Lista']['id'].'/'.$planauditoria_id?>" <i class="fa fa-edit fa-lg"  aria-hidden="true" title="Editar hallazgo"></i></a>
		        <a href="<?php echo APP_WWW . "informes/view/".$informe['Informe']['id'].'/'.$planauditoria_id?>" <i class="fa fa-flag-o fa-lg"  aria-hidden="true" title="Ver desarrollo del hallazgo"></i></a>
			
			
                </td>
		<?php endif; ?>
		<?php if($nivel == 1):?>
		<td class="actions">
		<a href="<?php echo APP_WWW . "informes/edit/".$informe['Informe']['id'].'/'.$planauditoria_id?>" <i class="fa fa-check-square-o fa-lg"  aria-hidden="true" title="RESPONDER"></i></a>
		
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $informe['Informe']['id'],$planauditoria_id)); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $informe['Informe']['id'],$planauditoria_id)); ?>
                        <?php echo $this->Html->link(__('Validar'), array('action' => 'validacion', $informe['Informe']['id'],$planauditoria_id)); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $informe['Informe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $informe['Informe']['id']))); ?>
		</td>
		<?php endif; ?>
		
	</tr>
       
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pag {:page} de {:pages}, mostrando {:current} registros de un  {:count} total, empezando en {:start}, terminado en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

