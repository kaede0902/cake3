<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ledger $ledger
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(
            __('Edit Ledger'), ['action' => 'edit', 
            $ledger->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ledger'), 
            ['action' => 'delete', $ledger->id], 
            ['confirm' => 
            __('Are you sure you want to delete # {0}?', 
            $ledger->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ledgers'), 
            ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ledger'), 
            ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ledgers view large-9 medium-8 columns content">
    <h3><?= h($ledger->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer Name') ?></th>
            <td><?= h($ledger->customer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Tel1') ?></th>
            <td><?= h($ledger->customer_tel1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Tel2') ?></th>
            <td><?= h($ledger->customer_tel2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Staff name') ?></th>
            <td><?= h($ledger->staff_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Category') ?></th>
            <td><?= h($ledger->work_category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ledger->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ledger->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reserved') ?></th>
            <td><?= h($ledger->reserved) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ledger->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Customer Adress') ?></h4>
        <?= $this->Text->autoParagraph(h($ledger->customer_adress)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($ledger->content)); ?>
    </div>
</div>
