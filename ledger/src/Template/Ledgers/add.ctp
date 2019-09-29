<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ledger $ledger
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ledgers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ledgers form large-9 medium-8 columns content">
    <?= $this->Form->create($ledger) ?>
    <fieldset>
        <legend><?= __('Add Ledger') ?></legend>
        <?php
            $men = ['F','H','O','R'];

            echo $this->Form->control('customer_name');
            echo $this->Form->control('customer_adress');
            echo $this->Form->control('customer_tel1');
            echo $this->Form->control('customer_tel2');

            // need arr, $members = [hukuda, hayasi,ryo]
            echo $this->Form->control('staff_id', 
                ['options' => $men,
            ]);
            echo $this->Form->control('work_category',
                ['options' => ['0','1','2'],
            ]);
            echo $this->Form->control('content');
            echo $this->Form->control('reserved');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
