<!--            <tr class="active">
                <th>Norma</th>
                <th>Numerales</th>
                <th></th>
                
                
            </tr>-->
        </thead>
        <tbody>
            <?php foreach ($subnormas as $value1): ?>

                <tr class="">
    <!--                    <th><?php echo $value1['Normageneral']['descripcion'] ?> </th>
                    <td>
                    <?php echo $value1['Subnorma']['descripcion'] ?><br>
                    <?php
                    foreach ($value1['Subnormaindex'] as $value02) {
                        echo $value02['numero'] . ' - ';
                    }
                    ?>
                    </td>-->
                    <th>
    <!--                        <table class="table table-bordered">
                            <tr>
                                <th class="text-center">Requisitos de norma</th>
                                <th colspan="">Elegir</th>
                            </tr>
                        <?php
                        foreach ($value1['Subnormaindex'] as $value02):
                            foreach ($subnormasindice as $value03):
                                $i = 1;
                                foreach ($value03['Debe'] as $value04):
//                                        debug($value04);
                                    if ($value04['subnormaindice_id'] == $value02['id']):
                                        ?>
                                                                            <tr>
                                                                                <td>//<?php echo $value04['numeral'] . ' ' . $value04['descripcion'] . ' <span class=" text-success">(' . $value1['Normageneral']['descripcion'] . ')</span>' ?></td>
                                                                                <td><input type="checkbox" name="data[Lista][//<?php echo $i ?>][debe_id]" value="<?php echo $value04['id'] ?>" checked="true"></td>
                                        <?php echo $this->Form->input('planauditoria_id', array('type' => 'hidden', 'value' => $planauditoria_id)); ?>
                                                                            </tr>
                                        <?php
                                        $i++;
                                    endif;
                                endforeach;
                            endforeach;
                        endforeach;
                        ?>
                        </table>-->

                        
                       <?php if(in_array($value['id'], $elegido)): ?>
                        <td class="warning"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" disabled="true">
                            </td>
                        <?php   else: ?>
                        <td class="warning"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" >
                            <input type="hidden" name="data[Lista][<?php echo $i ?>][planauditoria_id]" value="<?php echo $planauditoria_id ?>" >
                        </td>
                        <?php  endif; ?>
                        
                        
                        
                        
                        <?php   else: ?>
                        <td class="success"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" class="selectall" checked="true">
                            <input type="hidden" name="data[Lista][<?php echo $i ?>][planauditoria_id]" value="<?php echo $planauditoria_id ?>" >
                        </td>