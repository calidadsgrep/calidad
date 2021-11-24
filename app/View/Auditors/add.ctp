<br>
<div class="col-md-12 well">
<?php echo $this->Form->create('Auditor'); ?>
	
		<legend><?php echo __('Crear Auditor'); ?></legend>
                <div class="col-md-4">
	<?php
		echo $this->Form->input('nombres',array('class'=>'form-control'));
		echo $this->Form->input('apellidos',array('class'=>'form-control'));?>
		
                </div>
                <div class="col-md-4">
                    <?php
		echo $this->Form->input('identificacion',array('class'=>'form-control'));
		echo $this->Form->input('usuario',array('class'=>'form-control'));
		echo $this->Form->input('clave',array('class'=>'form-control', 'type'=>'password'));
	?>
                    <br>
                </div>
                <div class="col-md-4">
	<?php
		
		echo $this->Form->input('correo',array('class'=>'form-control', 'type'=>'mail'));
		echo $this->Form->input('telefono',array('class'=>'form-control'));?>
                </div>
                <br>
<div class="col-md-12 text-center">	
<?php echo $this->Form->end(__('Registrar')); ?>
</div>
</div>
