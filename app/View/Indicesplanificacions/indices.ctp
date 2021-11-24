<div class="col-md-12">
<?php
//debug($subnormas);
foreach ($subnormas as $norma):?>
<li class=" text-success"> <?php echo $norma['Normageneral']['descripcion']?></li>
<?php echo $norma['Subnorma']['descripcion']?>
Numeral(es):<br>
<?php  
foreach ($subnormaindices as $indices):?>
<?php if($norma['Subnorma']['id'] == $indices['Subnormaindice']['subnorma_id']):?>
<?php echo  $indices['Subnormaindice']['numero'].' - '?>
<?php endif;?>
<?php endforeach;?>
<?php endforeach;?>
</div>