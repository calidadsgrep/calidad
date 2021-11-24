<br>
<div class="col-md-10">
    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">PLAN DE AUDITORIA</h3>
            </div>
            <div class=" panel-body">
                <?php echo $this->Form->create('Auditoria'); ?>

                <?php
                echo $this->Form->input('id');
                echo $this->Form->input('observaciones', array('class' => 'form-control', 'type' => 'textarea'));
                ?>
                <div class=" text-center">
                    <br>
                    <?php
                  
                      $options = array(
                        'label' => 'Generar plan de auditoria',
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