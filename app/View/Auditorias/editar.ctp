<br>
<div class="col-md-12">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">PLAN DE AUDITORIA</h3>
            </div>
            <div class=" panel-body">
                <div class="col-md-4 col-md-offset-2"> 
                    <?php
                    //debug($normagenerals);
                     echo $this->Form->create('Auditoria');
                     echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$id_usuario));
                     echo $this->Form->input('empresa_id', array('class' => 'form-control'));
                    ?>
                    <br>
                </div>

                <div class="col-md-4"> 
                    <label>Tipo De Auditoria</label>
                    <select class="form-control" name="data[Auditoria][tipo_auditoria]">
                        <option value="">Seleccionar</option>
                        <option value="Externa">Externa</option>
                        <option value="Interna">Interna</option>
                    </select>

                    <br>

                    <?php // echo $this->Form->input('usuario_id', array('class' => 'form-control', 'value' => $id_usuario)); ?>
                </div>

                <div class="col-md-4 col-md-offset-4 text-center"> 
                    <label>Numero De Auditores</label>
                    <input type="number" min="1" name="data[Auditoria][cant_auditores]" class=" form-control">
                </div>
                <div class="col-md-12 "> 
                    <h2 class="text-center">Normas de Calidad a Auditar</h2>


                    <?php
                    $i = 1;
                    foreach ($normagenerals as $value) :
                        ?>
                        <div class="col-md-3  col-md-offset-1">
                            <label class="text-justify">
                                <input type="checkbox" name="data[AuditoriasNormageneral][<?php echo $i ?>][normageneral_id]" value="<?php echo $value['Normageneral']['id'] ?>">
                                <?php echo $value['Normageneral']['descripcion'] ?>
                            </label>
                            <!--<br>-->  
                        </div>
                        <?php
                        $i++;
                    endforeach;
                    ?>
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