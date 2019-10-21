<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?= $this->Html->css('top'); ?>
    <title>ledger</title>
</head>
<body>
    <?php foreach ($ledgers as $ledger): ?>
    <div class="wrapper" 
        onclick='location.href = 
        "ledgers/edit/<?= $ledger->id ?>"'>
            <div class="num name row1">
                NAME<br><?= h($ledger->customer_name) ?>
            </div>
            <div class="num adress row1">
                ADRESS<br><?= h($ledger->customer_adress) ?>
            </div>
            <div class="num id row1">
                No.<?= h($ledger->id) ?><br>
            <?= $this->Html->link(__('Edit'), 
                ['action' => 'edit', $ledger->id]) ?>
            </div>
            <div class="num created row2">
                created<br>
                <?= h($ledger->created->format('m / d (D)')) ?>
            </div>
            <div class="num going row2">
                reserved<br>
                <?= h($ledger->reserved->format('m / d (D)')) ?>
            </div>
            <div class="num tel_1 row2">
                TEL1: <?= h($ledger->customer_tel1) ?><br>
                TEL2: <?= h($ledger->customer_tel2) ?>
            </div>
            <div class="num staff row2">
                staff<br><?= h($ledger->staff_name) ?>
            </div>
            <div class="num work_cat row3">
                <?= h($ledger->work_category) ?>
            </div>
            <div class="num content row3">
                content<br>
                <?= h($ledger->content) ?>
            </div>
    </div>
    <?php endforeach; ?>
    <div class='bottom'>
<button>
    <?= $this->Html->link(__(' ADD NEW'), ['action' => 'add']) ?>
</button>
        <p class='cnt'>
            <?= $this->Paginator->counter(
            ['format' => __('P. {{page}} / {{pages}}, 
            showing {{current}} / {{count}} cards')]) ?>
        </p>
        <div class="pages">
            <?= $this->Paginator->prev('< ' . __('prev')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </div>
    </div>
</body>
</html>
