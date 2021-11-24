<div class="listas form">
    <?php echo $this->Form->create('Lista'); ?>
<!--    <fieldset>
        <legend><?php echo __('Add Lista'); ?></legend>
        <?php
        echo $this->Form->input('planauditoria_id');
        echo $this->Form->input('debe_id');
        ?>
    </fieldset>-->

    



    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Listas'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Planauditorias'), array('controller' => 'planauditorias', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Planauditoria'), array('controller' => 'planauditorias', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Debes'), array('controller' => 'debes', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Debe'), array('controller' => 'debes', 'action' => 'add')); ?> </li>
    </ul>
</div>
