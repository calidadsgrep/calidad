<br>
<div class="col-md-10">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">RESPONDER HALLAZGOS</h3>
            </div>
            <div class=" panel-body">
                <?php echo $this->Form->create('Informe'); ?>

                <?php
                echo $this->Form->input('id');
                ?>
                <div class="col-md-12 well">
                    <h2 class="text-center">HALLAZGO</h2>
                    <?php echo $this->request->data['Lista']['observaciones']; ?>
                </div>

                <div class="col-md-12">
                    <br>
                    <label>Correción Propuesta</label>
                    <textarea name="data[Informe][correcciones]" class="form-control" value="<?php echo $this->request->data['Informe']['correcciones']; ?>"><?php echo $this->request->data['Informe']['correcciones']; ?></textarea>
                </div>
                <div class="col-md-12 text-center"><br>
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
    </div>
</div>

