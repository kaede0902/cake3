<?= 
$this->Form->create(
    $entity,
    [
        'type' => 'post',
        'url' => [
            'controller' => 'People',
            'action' => 'update'
        ]
    ]
);
?>
<?= $this->Form->hidden('People.id'); ?>
<h2>Name</h2>
<div>
    <?=
        $this->Form->text('People.name')
    ?>
</div>
<h2>Email</h2>
<div>
    <?=
        $this->Form->text('People.mail')
    ?>
</div>
<h2>Age</h2>
<div>
    <?=
        $this->Form->text('People.age')
    ?>
</div>
<div>
    <?= $this->Form->submit('Send') ?>
</div>
<?= $this->Form->end() ?>
