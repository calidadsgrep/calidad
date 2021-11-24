<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title text-center">REGISTRAR USUARIOS</h3>
    </div>
    <div class=" panel-body">
        <?php echo $this->Form->create('Usuario'); ?>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('nombres', array('class' => 'form-control','label'=>'Nombre Completo','required'));
            echo $this->Form->input('telefono', array('class' => 'form-control','label'=>'Telefono','required'));
            echo $this->Form->input('password', array('class' => 'form-control','label'=>'Contraseña','required'));
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('apellidos', array('class' => 'form-control','label'=>'Apellido','required'));
            echo $this->Form->input('correo', array('class' => 'form-control', 'type' => 'email','label'=>'Correo Electronico','required'));
            echo $this->Form->input('cargo', array('class' => 'form-control','label'=>'Cargo','required'));
            echo $this->Form->input('estado', array('value' => 'Activo','type'=>'hidden'));
            echo $this->Form->input('empresa_id', array('class' => 'form-control','label'=>'Empresa','required'));
            ?>
        </div>
        <div class="col-md-4">
            <?php
            echo $this->Form->input('identificacion', array('class' => 'form-control','label'=>'Identificación','required'));
            echo $this->Form->input('username', array('class' => 'form-control','label'=>'Usuario','required'));
            ?>
            <label for="nivel">Nivel</label>
            <select name="data[Usuario][nivel_id]" class="form-control" id="nivel" required="true">
            <?php if ($user['Usuario']['nivel_id'] == 1 ):?>
                <option value="1">Super Administrador</option>
                <option value="2">Administrador</option>
                <option value="3">Auditor</option>
                <option value="4">Cliente</option>
                <?php endif; ?>
                <?php if ($user['Usuario']['nivel_id'] == 2 ):?>
                <option value="3">Auditor</option>
                <option value="4">Cliente</option>
                <?php endif;?>
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
