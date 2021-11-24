<br>
<div class="col-md-10">
    <?php echo $this->Form->create('Informe'); ?>
   <table class="table table-striped">
       <tr>
           <th colspan="4" class="text-center success">Generar Hallazgos</th>
            
        </tr>
        <tr>
            <th>Requisitos</th>
            <th>Descripción del Hallazgo</th>
            <th>Tipo de Hallazgo</th>
            <th>Aspecto X Mejorar</th>
        </tr>
        <?php
        $i = 1;
        foreach ($listas as $value):
            ?>
            <tr>
                <td style="width: 30%">
                    <?php echo $value['Debe']['numeral'] . '- ' . $value['Debe']['descripcion'] ?>
                    <input name="data[Informe][<?php echo $i ?>][lista_id]" class="form-control" value="<?php echo $value['Lista']['id'] ?>" type="hidden">
                    <input name="data[Informe][<?php echo $i ?>][planauditoria_id]" class="form-control" value="<?php echo $value['Planauditoria']['id'] ?>" type="hidden">
                </td>
                <td style="width: 30%">
                    <textarea name="data[Informe][<?php echo $i ?>][observaciones]" class="form-control" value=""></textarea>
                </td>
                <td style="width: 15%">
                    <select name="data[Informe][<?php echo $i ?>][tipo_hallazgo]" id="UserField" class="form-control">
                        <option value="">(escoje uno)</option>
                        <option value="Observacion">Observación</option>
                        <option value="Mayor">Mayor</option>
                        <option value="Menor">Menor</option>

                    </select>
                <td class="text-center" style="width: 5%">
                    <input name="data[Informe][<?php echo $i ?>][aspecto_positivo]"  type="checkbox" value='si'>
                </td>  

            </tr>
    <?php $i++; endforeach; ?>
    </table>
<div class="alert-success text-center">

        <?php
        $options = array(
            'label' => 'Generar Hallazgos',
            'class' => 'btn btn-success',
            'div' => false
        );
        echo $this->Form->end($options);
        ?>
    </div>
</div>
