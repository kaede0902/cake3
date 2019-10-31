<?= $this->Html->css('form'); ?>
<ul>
    <li><?= __('Actions') ?></li>
    <li><?= $this->Html->link(__('Ledgers'), 
        ['action' => 'index']) ?></li>
</ul>
<div class="wrapper">
    <?= $this->Form->create($ledger) ?>
        <?php
            echo $this->Form->control('customer_name',[
                    'placeholder' => 'name',
                    'label' => [
                        'text' => 'NAME HERE',
                    ],
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

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
