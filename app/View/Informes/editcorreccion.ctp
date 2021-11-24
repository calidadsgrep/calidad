<br>
<div class="col-md-10">
    <?php echo $this->Form->create('Informe'); ?>
    <?php
                echo $this->Form->input('id');
                ?>
   <table class="table table-striped">
       <tr>
           <th colspan="4" class="text-center success">Actualizar Hallazgo</th>
            
        </tr>
        <tr>
            <th>Descripción del Hallazgo</th>
            <th>Tipo de Hallazgo</th>
            <th>Aspecto X Mejorar</th>
        </tr>
        
            <tr>
                
                <td style="width: 30%">
                    <textarea name="data[Informe][observaciones]" class="form-control" value=""><?php echo $this->request->data['Informe']['observaciones']; ?></textarea>
                </td>
                <td style="width: 15%">
                    <select name="data[Informe][tipo_hallazgo]" id="UserField" class="form-control">
                        <option value="<?php echo $this->request->data['Informe']['tipo_hallazgo']; ?>"><?php echo $this->request->data['Informe']['tipo_hallazgo']; ?></option>
                        <option value="Observacion">Observación</option>
                        <option value="Mayor">Mayor</option>
                        <option value="Menor">Menor</option>

                    </select>
                <td class="text-center" style="width: 5%">
                
                <?php $aspecto=$this->request->data['Informe']['aspecto_positivo'];
                if($aspecto=='si'):?>
                <input name="data[Informe][aspecto_positivo]"  type="checkbox" value='si' checked>
                <?php else:?>
                <input name="data[Informe][aspecto_positivo]"  type="checkbox" value='si'>
                
                
                
                <?php endif; ?>
                
                
                
                    
                </td>  

            </tr>
    
    </table>
<div class="alert-success text-center">

        <?php
        $options = array(
            'label' => 'Actualizar Hallazgo',
            'class' => 'btn btn-success',
            'div' => false
        );
        echo $this->Form->end($options);
        ?>
    </div>
</div>
