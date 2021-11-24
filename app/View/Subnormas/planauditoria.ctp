<div class="col-md-10">
<table class="table table-bordered">
    <tr>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($subnormas as $value):?>
    <tr>
        <th> <?php echo  $value['Normageneral']['descripcion']?></th>
        <th> <?php echo  $value['Subnorma']['numero'].' - '.$value['Subnorma']['descripcion']?></th>
        <th> <?php 
        foreach ($value['Subnormaindice'] as $value1):
            
        
        echo $value['Subnorma']['numero'].'.'. $value1['numero'].' - '.$value1['descripcion']?></th>
<?php endforeach;?>
    </tr>
   <?php endforeach;?>
</table>
<?php foreach ($subnormas as $value):?>
<ul><?php echo  $value['Normageneral']['descripcion']?>
    
    <li><?php echo  $value['Subnorma']['numero'].' - '.$value['Subnorma']['descripcion']?>
        <ul>
            <li>
                
                
            </li>
        </ul>
    </li>
</ul>
<?php endforeach;?>
</div>