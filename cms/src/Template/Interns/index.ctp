<h1><center>Interns Data</center></h1>


<?php foreach($interns->toArray() as $obj): ?>
<h1> <?= $obj->id?></h1>
<h1> <?= $obj->email?></h1>
<?php endforeach; ?>

<?= $this->Url->build(
    ['Controller' => 'Intern', 'action'=>'detail']
) ?>
?id=1

