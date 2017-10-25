<ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New '.$value), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List '.$values), ['action' => 'index']) ?></li>
</ul>