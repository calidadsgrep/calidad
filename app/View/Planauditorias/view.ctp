<div class="col-md-12">
    <br>
    <?php foreach ($auditorias as $auditoria): ?>
    <?php endforeach; ?>
    <table class="table table-bordered">
        <?php if ($auditoria['Auditoria']['tipo_auditoria'] == 'Interna'): ?>
            <tr class="">
                <th  colspan="4" class="alert-info text-center" >PROGRAMA DE AUDITORIA</th>
            </tr>
        <?php else: ?>
            <tr class="text-center">
                <th  colspan="4" class="alert-info" >PLAN DE AUDITORIA</th>
            </tr>
        <?php endif; ?>

        <tr class="text-center">
            <th  colspan="4" class="alert-info" >DATOS DE LA ORGANIZACIÓN</th>
        </tr>
        <?php foreach ($auditorias as $auditoria): ?>
            <tr class="">
                <th>ORGANIZACIÓN</th>
                <td colspan="3"><?php echo $auditoria['Empresa']['razonSocial'] ?></td>
            </tr>
            <tr class="">
                <th >DIRECCIÓN</th>
                <td><?php echo $auditoria['Empresa']['direccion'] ?></td>
                <th>MUNICIPIO</th>
                <td><?php echo $auditoria['Empresa']['municipio'] ?></td>
            </tr>
            <tr class="">
                <th>REPRESENTANTE</th>
                <td><?php echo $auditoria['Empresa']['reponsable'] ?></td>
                <th>CARGO</th>
                <td><?php echo $auditoria['Empresa']['cargo'] ?></td>
            </tr>
            <tr class="">
                <th>TELEFONO</th>
                <td><?php echo $auditoria['Empresa']['telefono'] ?></td>
                <th>CORREO ELECTRONICO</th>
                <td><?php echo $auditoria['Empresa']['correo'] ?></td>
            </tr>
            <tr class="alert-info" >
                <th colspan="4" class="text-center">ALCANCE, CRITERIOS Y OBJETIVOS DE LA AUDITORÍA</th>
            </tr>

            <tr class="text-justify" >
                <td colspan="4" class="text-center alert-info">ALCANCE</td>
            </tr>
            <tr class="text-justify" >
                <td colspan="4" class="text-justify"><?php echo $auditoria['Auditoria']['alcances'] ?></td>
            </tr>
            <tr class="text-justify" >
                <td colspan="4" class="text-center alert-info">CRITERIOS DE AUDITORÍA</td>
            </tr>
            <tr class="text-justify" >
                <td colspan="4" class="text-justify "><?php echo $auditoria['Auditoria']['criterios'] ?></td>
            </tr>
            <tr class="text-justify" >
                <td colspan="4" class="text-center alert-info">OBJETIVOS DE LA AUDITORÍA</td>
            </tr> 
            <tr class="text-justify" >
                <td colspan="4" class="text-justify"><?php echo $auditoria['Auditoria']['objetivos'] ?></td>
            </tr>
            <?php if ($auditoria['Auditoria']['tipo_auditoria'] == 'Interna'): ?>
                <tr class="text-justify" >
                    <td colspan="4" class="text-center alert-info">RIESGOS DE LA AUDITORÍA</td>
                </tr> 
                <tr class="text-justify" >
                    <td colspan="4" class="text-justify"><?php echo $auditoria['Auditoria']['riesgo'] ?></td>
                </tr>
            <?php endif; ?>

            <tr class="">
                <th colspan="2" class="">TIPO DE AUDITORIA</th>
                <td colspan="1" class="text-justify"><?php echo $auditoria['Auditoria']['tipo_auditoria'] ?></td>
                <td colspan="1" class="text-justify"><?php echo $auditoria['Auditoria']['fecha'] . ' hasta ' . $auditoria['Auditoria']['fechafin'] ?></td>
            </tr>
            <?php foreach ($planes as $plane): ?>
            <?php endforeach; ?>
                <tr class="">
                <th colspan="2" class="">AUDITOR LIDER</th>
                    <td colspan="2" class="text-justify"><?php echo strtoupper($plane['Planauditoria']['auditor_lider']) ?></td>
                </tr>
                <tr class="">
                <th colspan="2" class="">AUDITOR DE APOYO</th>
                    <td colspan="2" class="text-justify"><?php echo strtoupper($plane['Planauditoria']['auditor_apoyo']) ?></td>
                </tr>
                <tr class="">
                <th colspan="2" class="">EXPERTO TECNICO</th>
                    <td colspan="2" class="text-justify"><?php echo strtoupper($plane['Planauditoria']['expertotecnico']) ?></td>
                </tr>
        <?php endforeach; ?>
    </table>
    <table class="table table-bordered">
        <tr class="text-center">
            <th  colspan="6" class="text-center alert-info">DESCRIPCIÓN DE ACTIVIDADES</th>
        </tr>
        <tr class="">
            <th>PROCESO /ÁREA /ACTIVIDAD</th>
            <th>REQUISITOS A AUDITAR</th>
            <th>AUDITOR LIDER</th>
            <th>FECHA Y HORA</th>
            <th>RESPONSABLE Y CARGO</th>
        </tr>
        <?php $i = 1;
        foreach ($planes as $plane): ?>
            <tr class="">
                <td colspan=""><?php echo strtoupper($plane['Proceso']['nombre']) ?></td>
                <td><a onclick="loadResource(<?php echo $plane['Planauditoria']['id']; ?>, '<?php echo APP_WWW."indicesplanificacions/indices/" ?>','lista<?php echo $i ?>')"  class="btn btn-success">Ver Requisitos</a>
                    <div class="col-md-12"  id="lista<?php echo $i ?>" name='lista<?php echo $i ?>' > </div> 
                </td>
                <td colspan=""><?php echo strtoupper($plane['Planauditoria']['auditor_lider']) ?></td>
                <td colspan=""><?php echo '<strong>Inicia</strong>  '.$plane['Planauditoria']['fecha'].' -- '.$plane['Planauditoria']['horaInicio'] . ' <strong>Hasta</strong> ' . $plane['Planauditoria']['horaFin'] ?></td>
                <td colspan=""><?php echo $plane['Planauditoria']['reponsablecargo'] . ' - ' .  $plane['Planauditoria']['cargo'] ?></td>

            </tr>
    <?php $i++;
endforeach; ?>
        <tr>
            <th colspan="5" class="text-center alert-info">OBSERVACIONES</th>
        </tr>
        <tr>
            <td colspan="5" >
<?php echo $auditoria['Auditoria']['observaciones'] ?>
            </td>
        </tr>
    </table>
    <a href="" class="btn btn-success">Finalizar Programa</a>
</div>
<?php echo $this->Ajax->getLoadResource(); ?>