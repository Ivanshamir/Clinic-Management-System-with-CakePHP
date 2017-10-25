<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('value' => 'Carrier', 'values' => 'Carriers')); ?>
</nav>
<div class="carrirs form large-9 medium-8 columns content">
    <?= $this->Form->create($carrir) ?>
    <fieldset>
        <legend><?= __('Add Carrir') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('carrir_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
