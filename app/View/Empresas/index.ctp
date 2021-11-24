<br>
<div class="col-md-10">
	<a href="<?php echo APP_WWW . "empresas/add".'/'?>" class="btn btn-success">Registrar Empresa</a></p>      
<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
            <tr>
                <th colspan="5" class="success  text-center">Empresas</th>
            </tr>
	<tr >
			
			<th><?php echo $this->Paginator->sort('razonSocial','Razon Social'); ?></th>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
                        <th><?php echo $this->Paginator->sort('tipo'); ?></th>
			
			<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($empresas as $empresa): ?>
	<tr>
		
		<td><?php echo h($empresa['Empresa']['razonSocial']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['nit']); ?>&nbsp;</td>
                <td><?php echo h($empresa['Empresa']['tipo']); ?>&nbsp;</td>
		


<td class="actions">
<a onclick="loadResource(<?php echo $empresa['Empresa']['id']; ?>, '<?php echo APP_WWW . "empresas/edit".'/'?>', 'lista')"><span class="fa fa-edit fa-lg" title="Editar Datos"></span></a>
<a onclick="loadResource(<?php echo $empresa['Empresa']['id']; ?>, '<?php echo APP_WWW . "procesos/add".'/'?>', 'lista')"><span class="fa fa-plus fa-lg" title="Adicionar procesos"></span></a>
<a onclick="loadResource(<?php echo $empresa['Empresa']['id']; ?>, '<?php echo APP_WWW . "procesos/index".'/'?>', 'lista')"><span class="fa fa-eye fa-lg" title="Ver procesos"></span></a>
<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $empresa['Empresa']['id']), array('confirm' => __('Esta seguro de eliminar la empresa %s?', $empresa['Empresa']['razonSocial']),'class'=>'fa fa-trash fa-lg', 'title'=>'Eliminar empresa')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>



 <p>
</a>


	 <div class="col-md-12" id="lista" name='lista'></div>
	
</div>
<?php echo $this->Ajax->getLoadResource(); ?>
