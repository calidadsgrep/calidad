<br>
<div class="col-md-10">
    <?php
    echo $this->Form->create('Lista');
    //echo $this->Form->input('id');
    
    ?>
   <table class="table table-striped">
       <tr>
           <th colspan="4" class="text-center success">Lista de Chequeo</th>
            
        </tr>
        <tr>
            <th>Requisitos</th>
            <th>Descripción del Hallazgo</th>
            <th>Tipo de Hallazgo</th>
            <th>Generar</th>
        </tr>
        <?php
        $i = 1;
        foreach ($listas as $value):
//            echo $value['Lista']['observaciones'];
            ?>
            <tr>
                <td style="width: 30%">
                    <input name="data[Lista][<?php echo $i ?>][id]" type="hidden" value="<?php echo $value['Lista']['id'] ?>" >
                    <?php 
                   echo $value['Debe']['numeral'] . '- ' . $value['Debe']['descripcion'] ?>
                 </td>
                <td style="width: 30%">
                    <textarea name="data[Lista][<?php echo $i ?>][observaciones]" class="form-control" value="<?php echo $value['Lista']['observaciones'];  ?>"><?php echo  ltrim($value['Lista']['observaciones']); ?>
                    </textarea>
                   
                </td>
                <td style="width: 15%">
                    <select name="data[Lista][<?php echo $i ?>][tipo]" id="UserField" class="form-control">
                        <option value="<?php echo $value['Lista']['tipo'];  ?>"><?php echo $value['Lista']['tipo']; ?></option>
                        <option value="Aspecto Positivo">Aspecto Positivo</option>
                        <option value="Observacion">Observación</option>
                        <option value="Menor">Menor</option>
                        <option value="Mayor">Mayor</option>

                    </select>
                <td class="text-center" style="width: 5%">
                    <input name="data[Lista][<?php echo $i ?>][estado]"  type="checkbox" value='si'>
                </td>  

            </tr>
    <?php $i++; endforeach; ?>
    </table>
<div class="alert-success text-center">

        <?php
        $options = array(
            'label' => 'Guardar',
            'class' => 'btn btn-success',
            'div' => false
        );
        echo $this->Form->end($options);
        ?>
    <a href="<?php echo APP_WWW . "planauditorias/index/".$auditoria.'/'?>" class="btn btn-success">Terminar</a>
    </div>
</div>

