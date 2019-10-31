<title><?= h($this->fetch('title')) ?></title>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ledger->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ledger->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ledgers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ledgers form large-9 medium-8 columns content">
    <?= $this->Form->create($ledger) ?>
    <fieldset>
        <legend><?= __('Edit Ledger') ?></legend>
        <?php
            echo $this->Form->control('customer_name');
            echo $this->Form->control('customer_adress');
            echo $this->Form->control('customer_tel1');
            echo $this->Form->control('customer_tel2');
            echo $this->Form->control('staff_name');
            echo $this->Form->control('work_category');
            echo $this->Form->control('content');
            echo $this->Form->control('reserved');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
