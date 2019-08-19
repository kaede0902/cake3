<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Intern $intern
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Intern'), ['action' => 'edit', $intern->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Intern'), ['action' => 'delete', $intern->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intern->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Interns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Intern'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="interns view large-9 medium-8 columns content">
    <h3><?= h($intern->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($intern->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($intern->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($intern->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Des') ?></h4>
        <?= $this->Text->autoParagraph(h($intern->des)); ?>
    </div>
    <div class="row">
        <h4><?= __('Location') ?></h4>
        <?= $this->Text->autoParagraph(h($intern->location)); ?>
    </div>
    <div class="row">
        <h4><?= __('Univ') ?></h4>
        <?= $this->Text->autoParagraph(h($intern->univ)); ?>
    </div>
</div>
