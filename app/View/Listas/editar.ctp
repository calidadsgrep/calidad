<div class="col-md-10">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">EDITAR HALLAZGOS</h3>
            </div>
            <div class=" panel-body">
                <?php echo $this->Form->create('Lista'); ?>

                <?php
                echo $this->Form->input('id');
                ?>
                <div class="col-md-12 well text-center">
                    <h2 class="text-center">NUMERAL:<?php echo $this->request->data['Debe']['numeral'] ; ?></h2>
                    <?php echo $this->request->data['Debe']['descripcion']; ?>
                </div>
<div class="row">
                <div class="col-md-8">
                    
                    <label>Observaciones</label>
                    <textarea  rows="4" cols="50" name="data[Lista][observaciones]" class="form-control" value="<?php echo $this->request->data['Lista']['observaciones']; ?>"><?php echo $this->request->data['Lista']['observaciones']; ?></textarea>
                </div>
                    <div class="col-md-4">
                <label>Tipo de Hallazgo</label>
                <select name="data[Lista][tipo]" id="UserField" class="form-control">
                        <option value="<?php $this->request->data['Lista']['tipo']  ?>"><?php echo $this->request->data['Lista']['tipo']; ?></option>
                        <option value="Aspecto Positivo">Aspecto Positivo</option>
                        <option value="Observacion">Observación</option>
                        <option value="Menor">Menor</option>
                        <option value="Mayor">Mayor</option>

                    </select>
                </div>
                <div class="col-md-12 text-center"><br>
                    <?php
                    $options = array(
                        'label' => 'Actualizar',
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