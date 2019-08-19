<?= $this->Html->css('top'); ?>

<?php foreach ($interns as $intern): ?>
<div class="cards">
    <div class="image">
        <img src="https://dummyimage.com/300x150/00BCD4/fff" >
    </div>
        <img class='icon' src="https://image.flaticon.com/icons/svg/109/109718.svg" >
    <div class="title">
        <?= $intern->name?>
    </div>
    <div class="des">
        <p> <?= $intern->des?> </p>
        <p> <?= $intern->location?> </p>
        <button>
            <?= $this->Html->link(__('SEE DETAIL'), 
            ['action' => 'view', $intern->id]) ?>
        </button>
    </div>
</div>
<?php endforeach; ?>

<button class="fixed-btn">
<?= $this->Html->link(__('+'), ['action' => 'add']) ?>
</button>


    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __(
            'Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total'
        )]) ?></p>
    </div>

