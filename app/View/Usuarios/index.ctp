<div class="col-md-10">
<table class="table table-bordered">
        <thead>
            <tr> <th class="text-center active" colspan="7">Usuarios</th></tr>
            <tr>

                <th>Nombres/Apellidos</th>
                <th>Empresa</th>
                <th>Correo</th>
                <th>Nivel</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th class="actions"><?php echo __('Acciones'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            
                <tr>

                    <td><?php echo h(strtoupper($usuario['Usuario']['nombres']).' '.strtoupper($usuario['Usuario']['apellidos'])); ?>&nbsp;</td>
                    <td><?php echo h(strtoupper($usuario['Empresa']['razonSocial'])); ?>&nbsp;</td>
                    <td><?php echo h($usuario['Usuario']['correo']); ?>&nbsp;</td>
                    <td><?php 
                    if($usuario['Usuario']['nivel_id']==1){
                    echo 'Super Administrador';
                    }
                    if($usuario['Usuario']['nivel_id']==2){
                    echo 'Administrador';
                    }
                    if($usuario['Usuario']['nivel_id']==3){
                    echo 'Auditor';
                    }
                    if($usuario['Usuario']['nivel_id']==4){
                    echo 'Cliente';
                    }
                    ?>&nbsp;</td>
                    <td><?php echo h($usuario['Usuario']['telefono']); ?>&nbsp;</td>
                    <td><?php echo h($usuario['Usuario']['estado']); ?>&nbsp;</td>
                    <td class="actions">
                       <a onclick="loadResource(<?php echo $usuario['Usuario']['id']; ?>, '<?php echo APP_WWW . "usuarios/edit".'/'?>', 'lista')"><span class="glyphicon glyphicon-edit" title="Editar Datos"></span></a>

<a onclick="loadResource(<?php echo $usuario['Usuario']['id']; ?>, '<?php echo APP_WWW . "usuarios/activar".'/'?>', 'lista')"><span class="glyphicon glyphicon-trash" title="Editar estado"></span>
</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php if ($user['Usuario']['nivel_id'] == '1' or $user['Usuario']['nivel_id'] == '2'):?>
    <div class="col-md-12 text-center">

        <ul>
            <a onclick="loadResource(<?php echo $usuario['Usuario']['id']; ?>, '<?php echo APP_WWW . "usuarios/add".'/'?>', 'lista')" class="btn btn-success"><span class="glyphicon glyphicon-plus" title="Registrar Usuarios"> </span> Registrar Usuarios</a>
           
        </ul>
        	 <div class="col-md-12" id="lista" name='lista'></div>
	
</div><?php endif; ?>
<?php echo $this->Ajax->getLoadResource(); ?>
 
</div>