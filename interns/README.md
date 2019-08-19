# Intern App
## Miro Link
https://miro.com/app/board/o9J_kwhBZUY=/?moveToWidget=3074457346792539823
## DB
bin/cake bake migration CreateInterns
name:text des:text location: text univ:text created

bin/cake migrations migrate

bin/cake bake all items

### Records
#### name
kaede, suzuki, Ykym, Tom, Bob, Emma,  
Kubo, Seki, Mori,  
#### des
cake, vue, rails, jq, react, laravel,  
cobol,Java, Excel,  
#### location
Ykhm, Tko, Tokyo, Kyot, US, UK, USSR,  
Fuksm, Oita, Ueno,  
#### univ
kngw, ykkk, mieji, Harverd, Pari, Moskwo,
Kkgkin, nihon, kngw,

## index
```
<?= $this->Html->link(__('New Intern'), ['action' => 'add']) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $intern->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $intern->id], 
    ['confirm' => __('Are you sure you want to delete {0}?', $intern->name)]) ?>
```
## view
```
<li><?= $this->Html->link(__('Edit Intern'), ['action' => 'edit', $intern->id]) ?> </li>
<li><?= $this->Form->postLink(__('Delete Intern'), ['action' => 'delete', $intern->id], 
    ['confirm' => __('Are you sure you want to delete # {0}?', $intern->id)]) ?> </li>
<li><?= $this->Html->link(__('List Interns'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('New Intern'), ['action' => 'add']) ?> </li>

```
