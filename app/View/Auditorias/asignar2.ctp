<br>
<div class="col-md-10">
<div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">PLAN DE AUDITORIA</h3>
        </div>
        <div class=" panel-body">
            <?php
    echo $this->Form->create('Auditoria');
    echo $this->Form->input('id');
    echo $this->Form->input('auditoria_id', array('value' => $id, 'type' => 'hidden'));
    ?>
            <div class="row">
                <div class="col-md-6">
                    <?php if ($TIPO_AUD == 'Interna'): ?>
                        <label>Describa el alcance del programa de auditoria</label>
                    <?php else: ?>
                        <label>Describa el Alcance de la Auditoria</label>
                    <?php endif; ?>

                    <textarea class="form-control" name="data[Auditoria][alcances]" class="form-control" required="required"></textarea>
                </div>
                <div class="col-md-6">
                    <?php if ($TIPO_AUD == 'Interna'): ?>
                        <label>Criterio del programa de auditoria</label>
                    <?php else: ?>
                        <label>Criterio de Auditoria(Marco Legal)</label>
                    <?php endif; ?>
                    <textarea type="text" name="data[Auditoria][criterios]" class="form-control" required="required"></textarea>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    
                    <?php if ($TIPO_AUD == 'Interna'): ?>
                        <label>Objetivos del programa de auditoria</label>
                    <?php else: ?>
                        <label>Objetivos de la Auditoria</label>
                    <?php endif; ?>
                    
                    <textarea type="text" name="data[Auditoria][objetivos]" class="form-control" required="required"></textarea>
                </div>
                <div class="col-md-6">
                    <label>Riesgo del Programa de Auditoria</label>
                    <textarea type="text" name="data[Auditoria][riesgo]" class="form-control" required="required"></textarea>
                </div>
                <div class="col-md-6">
                    <label>Fecha Inicio Auditoria</label>
                    <input type="date" name="data[Auditoria][fecha]" class="form-control" required="required">
                </div>
                <div class="col-md-6">
                    <label>Fecha Fin Auditoria</label>
                    <input type="date" name="data[Auditoria][fechafin]" class="form-control" required="required">
                    <br>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center"> 
                    <label>Metodo De Auditoria</label>
                    <select class="form-control" name="data[Auditoria][metodo]">
                        <option value="">Seleccionar</option>
                        <option value="MÉTODO DEDUCTIVO">MÉTODO DEDUCTIVO
</option>
                        <option value="MÉTODO INDUCTIVO">MÉTODO INDUCTIVO</option>
                    </select>

                    <br>
                </div>

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































