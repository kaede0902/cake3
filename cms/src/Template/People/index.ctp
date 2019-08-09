<p>This is table records</p>
<?=
$this->Form->create(
    null,
    [
        'type'=>'post',
        'url' =>[
            'controller'=>'People',
            'action'=>'index'
        ]
    ]
    );
?>
<h1>Finder</h1>
<div>
    <?= $this->Form->text('People.find'); ?>
</div>
<div>
    <?= $this->Form->submit('Find'); ?>
</div>
<?= $this->Form->end(); ?>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>mail</th>
        <th>age</th>
        <th></th>
    </tr>
<?php foreach($data->toArray() as $obj): ?>

    <tr>
        <td><?=h($obj->id) ?></td>
        <td>
            <a href="
                <?=
                $this->Url->build(
                        [
                            'controller'=>'People',
                            'action'=>'edit'
                        ]
                    );
                ?>
                ?id=
                <?=$obj->id?>
            ">
                <?=h($obj->name) ?>
            </a>
        </td>
        <td><?=h($obj->mail) ?></td>
        <td><?=h($obj->age) ?></td>
        <td>
            <a href="
                <?=
                $this->Url->build(
                        [
                            'controller'=>'People',
                            'action'=>'delete'
                        ]
                    );
                ?>
                ?id=
                <?=$obj->id?>
            ">
                delete
            </a>
        </td>

<?php endforeach; ?>
    </tr>
</table>
