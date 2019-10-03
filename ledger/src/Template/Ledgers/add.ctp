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
            $men = [
                'Fukuda' => 'Fukuda',
                'Hayasi' => 'Hayasi',
                'Seki' => 'Seki',
                'Kubo' => 'Kubo'
            ];
            $work_category = array(
                'preview' => 'preview',
                'build' => 'build',
                'repair' => 'repair',
                'etc' => 'etc'
            );
            echo $this->Form->control('customer_name');
            echo $this->Form->control('customer_adress');
            echo $this->Form->control('customer_tel1');
            echo $this->Form->control('customer_tel2');
            // why this do not in?
            echo $this->Form->select(
                'staff_name', $men);
            echo $this->Form->select(
                'work_category', $work_category);
            echo $this->Form->control('content');
            echo $this->Form->control('reserved');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
