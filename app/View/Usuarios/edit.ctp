<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title text-center">ACTUALIZAR USUARIOS</h3>
    </div>
    <div class=" panel-body">
        <?php echo $this->Form->create('Usuario'); ?>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('id');
            echo $this->Form->input('nombres', array('class' => 'form-control','label'=>'Nombre Completo'),'required');
            echo $this->Form->input('telefono', array('class' => 'form-control','label'=>'Telefono'),'required');
            echo $this->Form->input('password', array('class' => 'form-control','label'=>'Contraseña'),'required');
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('apellidos', array('class' => 'form-control','label'=>'Apellido'),'required');
            echo $this->Form->input('correo', array('class' => 'form-control', 'type' => 'email','label'=>'Correo Electronico'),'required');
            echo $this->Form->input('cargo', array('class' => 'form-control','label'=>'Cargo'),'required');
            echo $this->Form->input('empresa_id', array('class' => 'form-control','label'=>'Empresa'),'required');
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('identificacion', array('class' => 'form-control','label'=>'Identificación'),'required');
            echo $this->Form->input('username', array('class' => 'form-control','label'=>'Usuario'),'required');
            //print_r($user['Usuario']['nivel_id']);
            ?>
            <label for="nivel">Nivel</label>
            <select name="data[Usuario][nivel_id]" class="form-control" id="nivel" required="required">
               <option value="<?php echo $this->request->data['Usuario']['nivel_id']; ?>">
               
              <?php if($this->request->data['Usuario']['nivel_id'] == 1){ 
               echo'Super Administrador';
               }
               if($this->request->data['Usuario']['nivel_id']==2){ 
               echo'Administrador';
               }
              if($this->request->data['Usuario']['nivel_id']==3){ 
               echo'Auditor';
               }
               if($this->request->data['Usuario']['nivel_id']==4){ 
               echo'Cliente';
               }
               
               
               ?>
              </option>
            <?php if ($user['Usuario']['nivel_id'] == 1 ):?>
                <option value="1">Super Administrador</option>
                <option value="2">Administrador</option>
                <option value="3">Auditor</option>
                <option value="4">Cliente</option>
                <?php else:?>
                <option value="3">Auditor</option>
                <option value="4">Cliente</option>
                <?php endif; ?>
            </select>
           </div>
 
    <div class="col-md-12 text-center">
        <br/>
<?php
$options = array(
    'label' => 'Registrar',
    'class' => 'btn btn-success',
    'div' => false
);
echo $this->Form->end($options);
?>       
</div>
</div>
    </div>
