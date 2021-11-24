<div class="col-md-6 col-md-offset-3">
<div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title text-center">REGISTRO DE PROCESOS</h3>
        </div>
        <div class=" panel-body">
<?php echo $this->Form->create('Proceso'); ?>
	<?php
		echo $this->Form->input('empresa_id',array('value'=>$empresa,'type'=>'hidden'));
		echo $this->Form->input('nombre',array('class'=>'form-control','required'));
                echo '<br>';
	?>
	<?php
            $options = array(
                'label' => 'GUARDAR',
                'class' => 'btn btn-success',
                'div' => false
            );
            echo $this->Form->end($options);
            ?>
        </div>
    </div>
</div>
