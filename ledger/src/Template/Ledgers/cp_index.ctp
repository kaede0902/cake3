<head><title><? $this->fetch('hoge')?></title></head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ledger'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ledgers index large-9 medium-8 columns content">
    <h3><?= __('Ledgers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->
                    sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('customer_name') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('customer_tel1') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('customer_tel2') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('staff_name') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('work_category') ?></th>
                <th scope="col"><?= $this->Paginator->
                     sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('reserved') ?></th>
                <th scope="col"><?= $this->Paginator->
                    sort('modified') ?></th>
                <th scope="col" class="actions">
                    <?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ledgers as $ledger): ?>
            <tr>
                <td><?= $this->Number->format($ledger->id) ?></td>
                <td><?= h($ledger->customer_name) ?></td>
                <td><?= h($ledger->customer_tel1) ?></td>
                <td><?= h($ledger->customer_tel2) ?></td>
                <td><?= h($ledger->staff_name) ?></td>
                <td><?= h($ledger->work_category) ?></td>
                <td><?= h($ledger->created->format(
                    'm-d D')) ?></td>
                <td><?= h($ledger->reserved->format(
                    'm-d D')) ?></td>
                <td><?= h($ledger->modified->format(
                    'm-d D')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), 
                        ['action' => 'view', $ledger->id]) ?>
                    <?= $this->Html->link(__('Edit'), 
                        ['action' => 'edit', $ledger->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), 
                        ['action' => 'delete', $ledger->id], 
                        ['confirm' => __('Delete # {0}?', 
                        $ledger->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(
            ['format' => __('Page {{page}} of {{pages}}, 
            showing {{current}} record(s) 
            out of {{count}} total')]) ?></p>
    </div>
</div>
