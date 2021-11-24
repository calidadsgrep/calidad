<div class="col-md-12">
    <?php echo $this->Form->create('Planauditoria'); ?>
    <fieldset>
        <legend>Registrar Plan Auditoria</legend>
        <div class="col-md-6">
            <?php
            echo $this->Form->input('proceso', array('class' => 'form-control','required'));
            echo $this->Form->input('auditoria_id', array('value' => $id_auditoria, 'type' => 'hidden'));
            echo $this->Form->input('cargo', array('class' => 'form-control','required'));
            ?>
            <label>Hora Inicio</label>
            <input type="time" name="data[Planauditoria][horaInicio]" id="horaInicio"  class="form-control" required="required">
        </div>
        
        <div class="col-md-6">
            <?php echo $this->Form->input('reponsablecargo', array('class' => 'form-control','required','label'=>'Reponsable Cargo'));?>
            <label>Fecha Inicio</label>
            <input type="date" name="data[Planauditoria][fecha]" id="fecha"  class="form-control" required="required">
            
            <label>Hora Fin</label>
            <input type="time" name="data[Planauditoria][horafin]" id="horafin"  class="form-control" required="required">
        </div>
    </fieldset>
    <div class="col-md-12 text-center">
        <br>
        <?php
        $options = array(
            'label' => 'Generar Plan Auditoria',
            'class' => 'btn btn-success',
            'div' => false
        );
        echo $this->Form->end($options);
        ?>
    </div>
</div>

