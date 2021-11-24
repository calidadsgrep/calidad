<div class="col-md-12">

    <table class="table">
        <thead>
            <tr class="active">
                <th>Proceso</th>
                <th>Reponsable</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planauditorias as $value):?>
            <tr class="">
                <th> <?php echo $value['Planauditoria']['proceso']?> </th>
                <th> <?php echo $value['Planauditoria']['reponsablecargo']?></th>
                <th><?php echo $value['Planauditoria']['fecha']?></th>
                <th><?php echo $value['Planauditoria']['horaInicio']?></th>
                <th><?php echo $value['Planauditoria']['horaFin']?></th>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php echo $this->Form->create('Listachequeo'); ?>
    <fieldset>
        <legend><?php echo __('Add Listachequeo'); ?></legend>
        <?php
        echo $this->Form->input('planauditoria_id');
        echo $this->Form->input('debe_id');
        echo $this->Form->input('observacion');
        echo $this->Form->input('hallazgos');
        echo $this->Form->input('aspectospositivos');
        echo $this->Form->input('observacion2');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Listachequeos'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Debes'), array('controller' => 'debes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Debe'), array('controller' => 'debes', 'action' => 'add')); ?> </li>
    </ul>
</div>
