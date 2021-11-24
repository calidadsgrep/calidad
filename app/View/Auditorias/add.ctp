<br>
<div class="col-md-12 well">
    <?php echo $this->Form->create('Auditoria'); ?>

    <legend><?php echo __('Registrar Auditoria'); ?></legend>
    <div class="col-md-4">
        <?php
        echo $this->Form->input('empresa_id', array('class' => 'form-control'));
        echo $this->Form->input('proceso', array('class' => 'form-control'));
        echo $this->Form->input('responsableProceso', array('class' => 'form-control'));
        ?>

    </div>
    <div class="col-md-4">
        <div class="input date required">
            <label>Fecha Aplicación</label> 
            <input name="data[Auditoria][fechaAplicacion]" id="inicio" class="form-control" type="date" placeholder="aaaa-mm-dd" required="true">
        </div>
        <div class="input date required">
            <label>Hora de Inicio</label> 
            <input name="data[Auditoria][horaInicio]" id="inicio" class="form-control" type="time" placeholder="aaaa-mm-dd" required="true">
        </div>
        <div class="input date required">
            <label>Hora de Fin</label> 
            <input name="data[Auditoria][horaFin]" id="inicio" class="form-control" type="time" placeholder="aaaa-mm-dd" required="true">
        </div>
        
        <br>
    </div>
    <div class="col-md-4">
        <?php
        echo $this->Form->input('Normageneral', array('class' => 'form-control', 'label'=>'Normas a Auditar'));
        ?>
    </div>
    <br>
    <div class="col-md-12 text-center">	
        <?php echo $this->Form->end(__('Registrar')); ?>
    </div>
</div>
