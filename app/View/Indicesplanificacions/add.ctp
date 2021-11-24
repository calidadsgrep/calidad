<script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
<script>
      $(document).ready(function () {  
        //Detectar click en el checkbox superior de la lista
        $('#selectall').on('click', function () {
          //verificar el estado de ese checkbox si esta marcado o no
          var checked_status = this.checked;
 
          /*
           * asignarle ese estatus a cada uno de los checkbox
           * que tengan la clase "selectall"
          */
          $(".selectall").each(function () {
            this.checked = checked_status;
          });
        });
      });
    </script>
<div class="col-md-12 text-center text-justify">
    <br>
    <br>
<?php echo $this->Form->create('Indicesplanificacion'); ?>
    <ul>
    <label>
    <input id="selectall" type="checkbox"> Marcar todos
    </label>
    </ul>
    <ul>
         <?php
            $i=1;
            foreach ($sudnormaindices as $value):?>
        <li><input type="checkbox" class="selectall" name="data[Indicesplanificacion][<?php echo $i?>][subnormaindice_id]" value="<?php echo $value['Subnormaindice']['id'];?>"> <?php echo $value['Subnormaindice']['numero'].'-'.strtoupper($value['Subnormaindice']['descripcion']) ;?> </li>
           <?php $i++; endforeach ;?>
      </ul>
    <?php
		echo $this->Form->input('planauditoria_id',array('value'=>$id_planauditoria,'type'=>'hidden'));
	?>
	
<div class="col-md-12 text-center">
                    <?php
                    $options = array(
                        'label' => 'Adicionar Numeral al Plan Auditoria',
                        'class' => 'btn btn-success',
                        'div' => false
                    );
                    echo $this->Form->end($options);
                    ?>
                </div>

</div>