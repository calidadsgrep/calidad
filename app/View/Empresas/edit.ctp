<br>
<div class="col-md-12">
<div class="row">
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title text-center">ACTUALIZAR EMPRESA</h3>
    </div>
    <div class=" panel-body">
<?php echo $this->Form->create('Empresa'); ?>
    <br>
    <div class="col-md-4 col-md-offset-0">

	<?php
               echo $this->Form->input('id');
		echo $this->Form->input('razonSocial',array('class'=>'form-control', 'style' => 'text-transform:uppercase','required'=>'true' ));
		echo $this->Form->input('telefono',array('class'=>'form-control','required'=>'true'));
		echo $this->Form->input('reponsable',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
	?>
	
	<label>Estado</label>
	<select class='form-control' name="data[Empresa][estado]" required='required'>
	<option value='<?php echo $this->request->data['Empresa']['estado']; ?>'><?php echo $this->request->data['Empresa']['estado']; ?></option>
	<option value='activo'>Activo</option>
	<option value='inactivo'>Inactivo</option>
	</select>
	
    </div>

    <div class="col-md-4">
	<?php
                echo $this->Form->input('nit',array('class'=>'form-control','required'=>'true','required'=>'true'));
                echo $this->Form->input('direccion',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
                echo $this->Form->input('cargo',array('class'=>'form-control','style' => 'text-transform:uppercase','required'=>'true'));
               
        ?>
        <label>Fecha Inicio de Uso</label>
        <input class='form-control' type='date' name='data[Empresa][Finicio]' required='true' value="<?php echo $this->request->data['Empresa']['Finicio']; ?>">
        
    </div>
    
    <div class="col-md-4">
	<?php
                echo $this->Form->input('tipo',array('class'=>'form-control','style' => 'text-transform:uppercase' ,'required'=>'true'));
                echo $this->Form->input('municipio',array('class'=>'form-control','style' => 'text-transform:uppercase' ,'required'=>'true'));
		echo $this->Form->input('correo',array('class'=>'form-control','required'=>'true'));
		
	?>
	<label>Fecha Termino del Uso</label>
        <input class='form-control' type='date' name='data[Empresa][Ftermino]' required ='true' value="<?php echo $this->request->data['Empresa']['Ftermino']; ?>">
        

    </div>
    
    <div class="col-md-12 text-center">
<br><br>
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
</div>