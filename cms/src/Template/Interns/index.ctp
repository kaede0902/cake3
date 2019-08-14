<h1><center>Interns Data</center></h1>
<?= $this->Html->css('interns');?>
<script src="https://kit.fontawesome.com/c07fe90288.js"></script>




<?php foreach($interns->toArray() as $obj): ?>
<h1> <?= $obj->id?>. 
    <i class="far fa-user"></i>
    <?= $obj->name?>
</h1>

<h1> <?= $obj->text ?></h1>
<h1> <i class="far fa-envelope"></i><?= $obj->email?></h1>
<h1> <i class="fas fa-map-marker-alt"></i><?= $obj->location?></h1>
<?php endforeach; ?>

<?= $this->Url->build(
    ['Controller' => 'Intern', 'action'=>'detail']
) ?>
?id=1

