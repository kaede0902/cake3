<?= 
$this->Form->create(
    $entity,
    [
        'type' => 'post',
        'url' => [
            'controller' => 'People',
            'action' => 'destroy'
        ]
    ]
);
?>
<?= $this->Form->hidden('People.id'); ?>
<h1>Delete these records?</h1>
<div>
    <?=
        $entity['id']
    ?>
</div>
<div>
    <?=
        $entity['name']
    ?>
</div>
<div>
    <?=
        $entity['mail']
    ?>
</div>
<div>
    <?=
        $entity['age']
    ?>
</div>
    <?= $this->Form->submit('delete') ?>
</div>
<?= $this->Form->end() ?>
