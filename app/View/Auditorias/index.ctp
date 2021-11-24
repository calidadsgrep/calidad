<div class="container">	
<div class="col-md-10">	
<br>
        <table class="table table-bordered table-responsive ">
	<thead>
            <tr class="success">
			<th  class="text-center"><?php echo $this->Paginator->sort('id','Codigo Auditoria'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="text-center"><?php echo $this->Paginator->sort('fecha','Fecha Realización'); ?></th>
                       
                         <?php if(isset($planes)):?>
			<th class="text-center"><?php echo $this->Paginator->sort('normas'); ?></th>
                        <?php endif; ?>
                        <th class="actions text-center"><?php echo __('Menu del Plan'); ?></th>
	</tr>
	</thead>
	<tbody>
            
	<?php foreach ($auditorias as $auditoria):?>
        
	<tr>
		<td class="text-center">
		    <?php echo 'AU-0'.$auditoria['Auditoria']['id'];?>
		</td>
		<td class="text-center">
		    <?php echo strtoupper($auditoria['Empresa']['razonSocial']);?>
		</td>
               <td class="text-center">
		    <?php echo strtoupper($auditoria['Auditoria']['fecha']);?>
		</td>
                 <?php if(isset($planes)):?>
                <td class="text-center"><?php 
                foreach ($normas as $normageneral):
                echo '* '.h($normageneral['Normageneral']['descripcion']).'<br>'; 
                endforeach; 
                ?></td>
                <?php endif; ?>
                <td  class="text-center">
                
                
               <?php 
              // debug($user);
               if($user['Usuario']['nivel_id']!=4):?>
                <a href="<?php echo APP_WWW . "planauditorias/index/".$auditoria['Auditoria']['id'].'/'?>" <i class="fa fa-check-square-o fa-lg"  aria-hidden="true" title="Plan de Auditoria"></i></a>
                
                 <a onclick="loadResource(<?php echo $auditoria['Auditoria']['id']; ?>, '<?php echo APP_WWW . "planauditorias/view/" . $auditoria['Auditoria']['id'] .'/'?>', 'lista')"><span class="fa fa-list fa-lg"  aria-hidden="true" title="Ver Plan/Programa de Auditoria"></span></a>&nbsp;
                 <a onclick="loadResource(<?php echo $auditoria['Auditoria']['id']; ?>, '<?php echo APP_WWW . "planauditorias/asignar3/" . $auditoria['Auditoria']['id'] .'/'?>', 'lista')"><i class="fa fa-plus-square-o fa-lg"  aria-hidden="true" title="Agregar Plan"></i></a>&nbsp;
		    <a onclick="loadResource(<?php echo $auditoria['Auditoria']['id']; ?>, '<?php echo APP_WWW . "auditorias/editar/"?>', 'lista')"><i class="fa fa-edit fa-lg" title="editar datos" aria-hidden="true" ></i></a>&nbsp; 
                
                <?php else:?>
                <a href="<?php echo APP_WWW . "planauditorias/index/".$auditoria['Auditoria']['id'].'/'?>" <i class=" fa fa-list fa-lg"  aria-hidden="true" title="Detalles de Auditoria por proceso"></i></a>
                
                 <a onclick="loadResource(<?php echo $auditoria['Auditoria']['id']; ?>, '<?php echo APP_WWW . "planauditorias/view/" . $auditoria['Auditoria']['id'] .'/'?>', 'lista')"><span class="fa fa-check-square-o fa-lg "  aria-hidden="true" title="Ver Plan de Auditoria"></span></a>&nbsp;
                
              <?php endif; ?>
                
                   
                    
                    
                
                </td>
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>
        <div class="col-md-12" id="lista" name='lista'></div>
        <?php if(isset($planes)):  ?>
        <div class="col-md-12 text-center"><h2>Planes para la Auditoria</h2></div>
        <table class=" table table-bordered">
            <tr>
                <th>proceso</th>
                <th>horaInicio</th>
                <th>horaFin</th>
                <th>reponsablecargo</th>
                <th>tipo_auditoria</th>
                <th>Menu del Plan</th>
            </tr>
            <?php //debug($normas);
        foreach ($planes as $value):?>
            <tr>
                <td><?php echo h(strtoupper($value['Planauditoria']['proceso'])); ?>&nbsp;</td>
                <td><?php echo h(strtoupper($value['Planauditoria']['horaInicio'])); ?>&nbsp;</td>
                <td><?php echo h(strtoupper($value['Planauditoria']['horaFin'])); ?>&nbsp;</td>
                <td><?php echo h(strtoupper($value['Planauditoria']['reponsablecargo'])); ?>&nbsp;</td>
                <td><?php echo h(strtoupper($auditoria['Auditoria']['tipo_auditoria'])); ?>&nbsp;</td>
                <td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller'=>'planauditorias','action' => 'view', $value['Planauditoria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller'=>'planauditorias','action' => 'edit', $value['Planauditoria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'planauditorias','action' => 'delete', $value['Planauditoria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $value['Planauditoria']['id']))); ?>
		</td>
            </tr>
        <?php endforeach; ?>
        </table>
	<?php endif; ?>
<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pag {:page} de {:pages}, mostrando {:current} registros {:count} total, empezando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
<?php echo $this->Ajax->getLoadResource(); ?>
</div>
    </div>