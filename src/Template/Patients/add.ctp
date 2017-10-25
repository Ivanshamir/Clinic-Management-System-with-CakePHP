<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('value' => 'Patient', 'values' => 'Patients')); ?>
</nav>
<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Add Patient') ?></legend>
        <?php
            echo $this->Form->control('carrir_id', ['options' => $carrirs]);
            echo $this->Form->control('name');
            echo $this->Form->control('phone');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('zipcode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
