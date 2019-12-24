
<div class="wrapper">
    <?= $this->Form->create($ledger) ?>
        <?php
            echo $this->Form->control('customer_name',[
                    'placeholder' => 'TANAKA TARO',
                    'label' => [
                        'text' => 'NAME HERE',
                    ],
            ]);
            echo $this->Form->control('customer_adress',[
                'placeholder' => 'Yokohama city Kanagawa Section 
                Hakuraku 100',
                    'label' => __('ADRESS'),
            ]);
            echo $this->Form->control('customer_tel1',[
                    'placeholder' => '045-123-1234',
                    'label' => __('TEL NUMBER 1'),
            ]);
            echo $this->Form->control('customer_tel2',[
                    'placeholder' => '090-1234-1234',
                    'label' => __('TEL NUMBER 2'),
            ]);

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
            echo $this->Form->control('content',[
                'placeholder' => 'My TV does not work, 
I want air conditoner',
                'label' => __('CONTENT HERE'),
            ]);
            echo $this->Form->control('reserved',[
                'label' => __('GOING'),
            ]);
            echo $this->Form->control('done',[
                'class' => 'span2',
                'label' => false,
            ]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
