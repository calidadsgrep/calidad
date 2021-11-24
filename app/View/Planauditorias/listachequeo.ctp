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
<br>
<div class="col-md-10">
    <?php echo $this->Form->create('Planauditoria'); ?>

    <table class="table">
        <thead>
            <tr class="active text-center">
                <th colspan="5"class=" text-center">LISTA DE CHEQUEO</th>
            </tr>
            <tr class="active">
                <th>Proceso</th>
                <th>Reponsable</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planauditorias as $value): ?>
                <tr class="">
                    <th><?php echo $value['Proceso']['nombre'] ?> </th>
                    <th><?php echo $value['Planauditoria']['reponsablecargo'] ?></th>
                    <th><?php echo $value['Planauditoria']['fecha'] ?></th>
                    <th><?php echo $value['Planauditoria']['horaInicio'] ?></th>
                    <th><?php echo $value['Planauditoria']['horaFin'] ?></th>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table class="table table-hover">
        <thead>
            <tr class="active">
                <th> <label>Marcar</label><input id="selectall" type="checkbox"></th>
                <th>REQUISITOS DE LA NORMA PARA AUDITAR</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1; foreach ($subnormasindice as $debe):?> 
                <?php foreach ($debe['Debe'] as $value): ?>
                    <tr>
                        <?php if(!empty($elegido)):?>
                        <?php if(in_array($value['id'], $elegido)): ?>
                        <td class="warning"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" disabled="true">
                            </td>
                        <?php   else: ?>
                        <td class="success"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" class="selectall" checked="true">
                            <input type="hidden" name="data[Lista][<?php echo $i ?>][planauditoria_id]" value="<?php echo $planauditoria_id ?>" >
                        </td>
                        <?php  endif; ?>
                        <?php  else: ?>
                        <td class="success"> 
                            <input type="checkbox" name="data[Lista][<?php echo $i ?>][debe_id]" value="<?php echo $value['id'] ?>" class="selectall" checked="true">
                            <input type="hidden" name="data[Lista][<?php echo $i ?>][planauditoria_id]" value="<?php echo $planauditoria_id ?>" >
                        </td>
                        <?php  endif; ?>
                        <td class="text-justify">

                            <?php echo $value['numeral'] . '- ' . $value['descripcion']; ?>
                            <?php foreach ($subnormas as $value000): ?>
                                <?php if ($value000['Subnorma']['id'] == $debe['Subnorma']['id']): ?> 
                                    <?php echo '<strong>' . $value000['Normageneral']['descripcion'] . '</strong>' ?> 
                                <?php endif; ?> 
                            <?php endforeach; ?> 
                        </td>   
                    </tr>
                    <?php $i++;
                endforeach
                ?>
<?php endforeach; ?> 
        </tbody>
    </table>
    <div class="alert-success text-center">

        <?php
        $options = array(
            'label' => 'Validar requisitos para auditoria',
            'class' => 'btn btn-success',
            'div' => false
        );
        echo $this->Form->end($options);
        ?>
    </div>
</div>