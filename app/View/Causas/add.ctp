<div class="col-md-10">
<div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title text-center">Agregar Causa</h3>
            </div>
            <div class=" panel-body">
            <table class="table table-bordered">
            <tr><th>causas relacionadas</th></tr>
            
            
            <?php if(!empty($informes)):?>
            <?php foreach($informes as $info):?>
             <tr><td><?php echo $info['Causa']['nombre'] ?></td></tr>
            <?php endforeach;?>
            <?php endif;?>
            </table>
            <div class="col-md-12">
            <?php echo $this->Form->create('Causa',array('type' => 'file')); ?>
              <?php
		echo $this->Form->input('informe_id',array('value'=>$hallazgo_id,'type'=>'hidden'));
		echo $this->Form->input('nombre',array('class'=>'form-control','type'=>'textarea','label'=>'Descripción de Causa (Relacione la causa real que dio origen a la no conformidad)'));
		
	?>
            </div>
            
            
            <div class="col-md-12 text-center"><br>
                    <?php
                    $options = array(
                        'label' => 'Guardar Descripción de la Causa',
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
