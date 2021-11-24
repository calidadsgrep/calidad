<br>
<div class="col-md-10">
	<?php foreach ($clientes as $Cliente): ?>
        <?php endforeach; ?>
    <?php if(isset($Cliente['Cliente']['id'])): ?>
       <a onclick="loadResource(<?php echo $Cliente['Cliente']['id']; ?>, '<?php echo APP_WWW . "clientes/add".'/'?>', 'lista')" class="btn btn-success">Registrar Cliente</a></p>
<?php else: ?> 
<a href="<?php echo APP_WWW . "clientes/add".'/'?>" class="btn btn-success">Registrar Cliente</a></p>


<?php endif; ?>      
<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<thead>
            <tr>
                <th colspan="5" class="success  text-center">Clientes</th>
            </tr>
	<tr >
			
			<th><?php echo $this->Paginator->sort('razonSocial','Razon Social'); ?></th>
			<th><?php echo $this->Paginator->sort('nit'); ?></th>
                        <th><?php echo $this->Paginator->sort('tipo'); ?></th>
			
			<th><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $Cliente): ?>
	<tr>
		
		<td><?php echo strtoupper($Cliente['Cliente']['razonSocial']); ?>&nbsp;</td>
		<td><?php echo h($Cliente['Cliente']['nit']); ?>&nbsp;</td>
                <td><?php echo h($Cliente['Cliente']['tipo']); ?>&nbsp;</td>
		


<td class="actions">
<a onclick="loadResource(<?php echo $Cliente['Cliente']['id']; ?>, '<?php echo APP_WWW . "clientes/edit".'/'?>', 'lista')"><span class="fa fa-edit fa-lg" title="Editar Datos"></span></a>
<a onclick="loadResource(<?php echo $Cliente['Cliente']['id']; ?>, '<?php echo APP_WWW . "procesos/add".'/'?>', 'lista')"><span class="fa fa-plus fa-lg" title="Adicionar procesos"></span></a>
<a onclick="loadResource(<?php echo $Cliente['Cliente']['id']; ?>, '<?php echo APP_WWW . "procesos/index".'/'?>', 'lista')"><span class="fa fa-eye fa-lg" title="Ver procesos"></span></a>
<?php echo $this->Form->postLink(__(''), array('action' => 'delete', $Cliente['Cliente']['id']), array('confirm' => __('Esta seguro de eliminar la Cliente %s?', $Cliente['Cliente']['razonSocial']),'class'=>'fa fa-trash fa-lg', 'title'=>'Eliminar Cliente')); ?>
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
