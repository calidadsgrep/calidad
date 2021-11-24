<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Cambio de Estado</h3>
    </div>
    <div class=" panel-body">
        <?php echo $this->Form->create('Usuario'); ?>
        <div class="col-md-12">
            <?php
            echo $this->Form->input('id');
            ?>
            <label for="nivel">ESTADO</label>
            <select name="data[Usuario][estado]" class="form-control" id="nivel" required="required">
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
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
