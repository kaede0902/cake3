<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Intern $intern
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Interns'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="interns form large-9 medium-8 columns content">
    <?= $this->Form->create($intern) ?>
    <fieldset>
        <legend><?= __('Add Intern') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('des');
            echo $this->Form->control('location');
            echo $this->Form->control('univ');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
