<br>
<div class="col-md-10">
<div class="row">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Actualizar Cliente</h3>
    </div>
    <div class=" panel-body">
<?php echo $this->Form->create('Cliente'); ?>
    <br>
    
    
    <div class="col-md-4 col-md-offset-0">

	<?php
               echo $this->Form->input('id');
		echo $this->Form->input('razonSocial',array('class'=>'form-control', 'style' => 'text-transform:uppercase','required'=>'true' ));
		echo $this->Form->input('telefono',array('class'=>'form-control','required'=>'true'));
		echo $this->Form->input('reponsable',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
		if($userTipo==1){
		echo $this->Form->input('estado',array('value'=>'Consultora','type'=>'hidden','required'=>'true'));}
		else{
		echo $this->Form->input('estado',array('value'=>'Cliente','type'=>'hidden','required'=>'true'));}
	?>
	
	
    </div>

    <div class="col-md-4">
	<?php
	        echo $this->Form->input('tratamiento',array('value'=>'Activo','type'=>'hidden','required'=>'true'));
                echo $this->Form->input('nit',array('class'=>'form-control','required'=>'true','required'=>'true'));
                echo $this->Form->input('direccion',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
                echo $this->Form->input('cargo',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
               
        ?>
        <?php if($userTipo==1):?>
        <label>Fecha Inicio de Uso</label>
        <input class='form-control' type='date' name='data[Cliente][Finicio]' required='true'>
        <?php endif;?>
    </div>
    
    <div class="col-md-4">
	<?php
                echo $this->Form->input('tipo',array('class'=>'form-control','style' => 'text-transform:uppercase' ,'required'=>'true'));
                echo $this->Form->input('municipio',array('class'=>'form-control','style' => 'text-transform:uppercase' ,'required'=>'true'));
		echo $this->Form->input('correo',array('class'=>'form-control','required'=>'true'));
		
	?>
	<?php if($userTipo==1):?>
	<label>Fecha Termino del Uso</label>
        <input class='form-control' type='date' name='data[Cliente][Ftermino]' required ='true'>
        <?php endif;?>

    </div>
    
    <div class="col-md-12 text-center">
<br><br>
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