<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
     <?= $this->Element('actions', array('value' => 'Appointment', 'values' => 'Appointments')); ?>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Edit Appointment') ?></legend>
        <?php
            echo $this->Form->control('patient_id', ['options' => $patients]);
            echo $this->Form->control('doctor_id', ['options' => $doctors]);
            echo $this->Form->control('appointment_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
