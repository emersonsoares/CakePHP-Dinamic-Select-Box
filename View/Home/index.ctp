<?php echo $this->Html->script('views/home/listar_cidades.js'); ?>
<div class="form">
    <?php echo $this->Form->create(null); ?>
    <fieldset>
        <legend><?php echo __('Exemplo de select dinamico com cidades e estados do Brasil'); ?></legend>
        <?php echo $this->Form->input('estado_id', array('type' => 'select', 'options' => $estados, 'id' => 'estados', 'empty' => 'selecione um estado')) ?>
        <?php echo $this->Form->input('cidade_id', array('type' => 'select', 'id' => 'cidades', 'empty' => 'selecione uma cidade')) ?>
    </fieldset>
    <?php echo $this->Form->end(); ?>
</div>
<div class="actions">
    <h3><?php echo __('Links'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('código fonte'), 'https://github.com/emersonsoares/CakePHP-Dinamic-Select-Box'); ?></li>
        <li><?php echo $this->Html->link(__('emersonsoares.com'), 'http://emersonsoares.com'); ?></li>
    </ul>
</div>