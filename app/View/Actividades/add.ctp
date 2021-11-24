<div class="col-md-12">
<?php echo $this->Form->create('Actividade'); ?>
	<fieldset>
		<legend><?php echo __('Plan de Acción Correctivo (Acciones que van a eliminar la o las causas identificadas)'); ?></legend>
	<?php
		echo $this->Form->input('causa_id',array('value'=>$causa_id,'type'=>'hidden'));
		echo $this->Form->input('nombre',array('label'=>'Plan de Acción Correctivo','class'=>'form-control','type'=>'textarea'));
		
	?>
	</fieldset>
<div class="col-md-12 text-center"><br>
                    <?php
                    $options = array(
                        'label' => 'Guardar Plan de Acción1',
                        'class' => 'btn btn-success',
                        'div' => false
                    );
                    echo $this->Form->end($options);
                    ?>
                </div>
                <hr>
</div>

</div>

