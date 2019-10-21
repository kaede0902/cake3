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
            $work_category = array(
                'preview' => 'preview',
                'build' => 'build',
                'repair' => 'repair',
                'etc' => 'etc'
            );
            echo $this->Form->control('customer_name',[
                    'placeholder' => 'name',
                    'label' => __('NAME'),
            ]);
            echo $this->Form->control('customer_adress',[
                    'placeholder' => 'adress',
                    'label' => __('ADRESS'),
            ]);
            echo $this->Form->control('customer_tel1',[
                    'placeholder' => 'telphone number',
                    'label' => __('TEL NUMBER'),
            ]);
            echo $this->Form->control('customer_tel2');



            echo $this->Form->select('staff_name', [
                'empty'=>__( '( Choose Staff )' ),
                'options' => [
                    ['value' => 'Fukuda', 
                        'text' => __('Fukuda')],
                    ['value' => 'Hayasi', 
                        'text' => __('Hayasi')],
                    ['value' => 'Seki', 
                        'text' => __('Seki')],
                    ['value' => 'Kubo', 
                        'text' => __('Kubo')],
                ]
            ]);
            echo $this->Form->select('work_category',[
                'empty'=>__( '( Choose Category )' ),
                'options' => [
                    ['value' => 'Estimate', 
                        'text' => __('Estimate')],
                    ['value' => 'Preview', 
                        'text' => __('Preview')],
                    ['value' => 'Repair', 
                        'text' => __('Repair')],
                    ['value' => 'Do', 
                        'text' => __('Do')],
                    ['value' => 'Etc', 
                        'text' => __('Etc')],
                ]

            ]);
            echo $this->Form->control('content');
            echo $this->Form->control('reserved');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
