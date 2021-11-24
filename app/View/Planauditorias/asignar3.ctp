<br>
<div class="col-md-10">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">PLAN DE AUDITORIA POR PROCESO</h3>
            </div><?php echo $this->Form->create('Planauditoria'); ?>
            
            <div class=" panel-body">
                
                <?php  echo $this->Form->input('auditoria_id', array('value' => $id_auditoria, 'type' => 'hidden'));?>

                <div class="col-md-4">
                    <?php echo $this->Form->input('proceso_id', array('class' => 'form-control', 'label' => 'Nombre del Proceso', 'required')); ?>
                  
                    <label>Auditor Lider</label>
                    <select name="data[Planauditoria][auditor_lider]" class="form-control" id="educambito" required="true">
                    <option value=""> Seleccionar</option>
                                                <?php foreach ($auditores as $lider): ?>
                    <option value="<?php echo $lider['Usuario']['nombres'].' '.$lider['Usuario']['apellidos']; ?>" > <?php echo $lider['Usuario']['nombres'].' '.$lider['Usuario']['apellidos']; ?> </option>
                                                <?php endforeach; ?>
                   </select>
                    
                    
                  <label>Hora Inicio Auditoria</label>
                    <input type="time" name="data[Planauditoria][horaInicio]" class="form-control" required="required">
                </div>
                <div class="col-md-4">
                    <?php
                    echo $this->Form->input('reponsablecargo', array('class' => 'form-control', 'label' => 'Lider del Proceso', 'required'));
                    ?>
                    <label>Auditor de Apoyo</label>
                    <select name="data[Planauditoria][auditor_apoyo]" class="form-control" id="educambito">
                    <option value=""> Seleccionar</option>
                    <option value="N/A"> No Aplica</option>
                                                <?php foreach ($auditores as $lider): ?>
                    <option value="<?php echo $lider['Usuario']['nombres'].' '.$lider['Usuario']['apellidos']; ?>" > <?php echo $lider['Usuario']['nombres'].' '.$lider['Usuario']['apellidos']; ?> </option>
                                                <?php endforeach; ?>
                   </select>
                    
                    <label>Hora Fin Auditoria</label>
                    <input type="time" name="data[Planauditoria][horaFin]" class="form-control" required="required">
                </div>
                <div class="col-md-4">
                    <?php
                    echo $this->Form->input('cargo', array('class' => 'form-control', 'label' => 'Cargo', 'required'));
                    echo $this->Form->input('expertotecnico', array('class' => 'form-control', 'label' => 'Experto Tecnico'));
                    ?>
                    <label>Fecha de Auditoria</label>
                    <input  onBlur="fechas()"  id="fecha" type="date" name="data[Planauditoria][fecha]" class="form-control" required="required"><br>
                </div>
                
                
            </div>
            <div class="alert-success text-center">

                <?php
                $options = array(
                    'label' => 'Continuar',
                    'class' => 'btn btn-success',
                    'div' => false
                );
                echo $this->Form->end($options);
                ?> 
            </div>
            </div>
        </div>
    </div>
</div>
<?php 
$fechaP =strtotime($fechaPlan);

$fechaP_dia= strtotime('-1 day', $fechaP);





?>
<script>

function fechas(){

     var fechaPa= <?php echo $fechaP_dia ?>;
     var fechainicio = Date.parse(document.getElementById('fecha').value)/ 1000;
     //document.write(fechainicio);
     //window.alert(fechaPa+''+fechainicio);

        if( fechainicio < fechaPa ){
           window.alert('la fecha del programa no se encuentra en el rango de la fecha asignada para iniciar la auditoria');
        }
        
        
        
    }


</script>