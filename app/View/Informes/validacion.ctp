<br>
<div class="col-md-10">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">VALIDAR HALLAZGOS</h3>
            </div>
            <div class=" panel-body">
                <?php echo $this->Form->create('Informe'); ?>

                <?php
                echo $this->Form->input('id');
                ?>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <p  class="text-center" title="Espacio exclusivo para la revisión del Auditor Líder"><strong>Revisión de la Corrección y del Plan de Acción Correctivo.</strong></p><hr><br>
                        <label>Observaciones</label>
                        <textarea name="data[Informe][obs_revision]" class="form-control" required="required"><?php echo $this->request->data['Informe']['obs_revision']?></textarea>
                    </div>
                    <div class="col-md-8">
                        <label>Fecha de Revisión</label>
                        <input type="date" name="data[Informe][revision_fecha]" class="form-control" value="<?php echo $this->request->data['Informe']['revision_fecha']?>" required="required">
                    </div>

                    <div class="col-md-4">
                        <label>Aprobada</label>
                        <select  name="data[Informe][revision_estado]" class="form-control" required="required">
                            <option value="<?php echo $this->request->data['Informe']['revision_estado']?>"><?php echo $this->request->data['Informe']['revision_estado']?></option>
                            <option value="Si">SI</option>
                            <option value="No">NO</option>
                        </select>
                    </div><hr><br>
                </div>
<?php if(!empty($this->request->data['Informe']['obs_revision'])):?>
<div class="col-md-12">
                    <div class="col-md-12">
                        <br><br>
                        <p class="text-center" title="Espacio exclusivo para la revisión y aprobación "><strong>Aprobación de la Corrección y del Plan de Acción Correctivo.</strong></p><hr><br>
                        <label>Observaciones</label>
                        <textarea name="data[Informe][obs_aprobacion]" class="form-control" required="required"><?php echo $this->request->data['Informe']['obs_aprobacion']?></textarea>
                    </div>
                    <div class="col-md-8">
                        <label>Fecha de Aprobación</label>
                        <input type="date" name="data[Informe][aprobacion_fecha]" class="form-control" required="required value="<?php echo $this->request->data['Informe']['aprobacion_fecha']?>"">
                    </div>
                    <div class="col-md-4">
                        <label>Aprobada</label>
                        <select  name="data[Informe][aprobacion_estado]" class="form-control" required="required">
                            <option value="<?php echo $this->request->data['Informe']['aprobacion_estado']?>"><?php echo $this->request->data['Informe']['aprobacion_estado']?></option>
                            <option value="Si">SI</option>
                            <option value="No">NO</option>
                        </select>
                    </div><hr><br>
                </div>
                <?php if(!empty($this->request->data['Informe']['obs_aprobacion'])):?>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <br><br>
                        <p class="text-center"><strong>Verificación de la Eficacia.<br>Seguimiento a la implementación del plan de acción y verificación de la eficacia de la no conformidad.</strong></label><hr><br>
                        <label>Observaciones</label>
                        <textarea name="data[Informe][obs_verificacion]" class="form-control" required="required"> <?php echo $this->request->data['Informe']['obs_verificacion']?></textarea>
                    </div>
                    <div class="col-md-4  col-md-offset-4 text-center">
                        <label>Fecha Verificación</label>
                        <input type="date" name="data[Informe][verificacion_fecha]" class="form-control" value="<?php echo $this->request->data['Informe']['verificacion_fecha']?>" required="required">
                        <br>
                    </div>
                    <div class="col-md-12 text-center">
                        <label class="radio-inline"><input type="radio" name="data[Informe][verifiacion_estado]" value="No Conformidad Solucionada" required="required">No Conformidad Solucionada</label>
                        <label class="radio-inline"><input type="radio" name="data[Informe][verifiacion_estado]" value="No Conformidad Pendiente" required="required">No Conformidad Pendiente</label>
                     </div><hr><br>
                </div>
<?php endif; ?>
<?php endif; ?>

<div class="col-md-12 text-center"><br>
                    <?php
                    $options = array(
                        'label' => 'Registrar',
                        'class' => 'btn btn-success',
                        'div' => false
                    );
                    echo $this->Form->end($options);
                    ?>
                    <a href="<?php echo APP_WWW . "informes/index/".$this->request->data['Informe']['planauditoria_id'].'/'?>" <i class=" btn btn-success"  aria-hidden="true" ></i> Salir</a>

                </div>
            </div>
        </div>
    </div>
</div>
