<?= $this->Html->css('detail'); ?>
<script src="https://kit.fontawesome.com/c07fe90288.js"></script>


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
        <p> <i class="fas fa-map-marker-alt"></i>   <?= $intern->location?> </p>
        <p> <i class="fas fa-school"></i>   <?= $intern->univ?> </p>
        <p> REGISTERD:  <?= $intern->created->format('Y-m-d')?> </p>
        <button>
            <?= $this->Html->link(__('BUY'), 
            ['action' => 'buy', $intern->id]) ?>
        </button>
    </div>
</div>
</div>
<div class="edit">
    <button class="fixed-btn"><i class="far fa-edit"></i></button>
</div>
