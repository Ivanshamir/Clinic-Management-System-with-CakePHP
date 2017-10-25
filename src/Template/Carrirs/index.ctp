<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carrir[]|\Cake\Collection\CollectionInterface $carrirs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('value' => 'Carrier', 'values' => 'Carriers')); ?>
</nav>
<div class="carrirs index large-9 medium-8 columns content">
    <h3><?= __('Carrirs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carrir_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($carrirs as $carrir): ?>
            <tr>
                <td><?= $this->Number->format($carrir->id) ?></td>
                <td><?= h($carrir->name) ?></td>
                <td><?= h($carrir->carrir_code) ?></td>
                <td><?= h($carrir->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $carrir->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carrir->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carrir->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carrir->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
