# re cake php
## why
find out the need of crud basic from ceress hackerson  
I made new rep `cake3` and this redo article.  
This is the usage from the MIN.  
MAKE KAEDE0902 GREAT CAKE USER!!!  
## Run server
To start, and see in chrome, type:  
```
bin/cake server
```
![alt](img/cake_server_terminal.png)  
You can see status in `http://localhost:8765/`  
![alt](img/8765.png)

## Make MVC by hands
### controller
To make a page, you need to make a proper controller.  
To make `localhost://8765/intern` page,  
You have to make `InternController.php`  
In `src/Controller/`  
Inside this, write:
```
<?php
namespace App\Controller;

use App\Controller\AppController;

class InternController extends AppController {
    public function index() {

    }
}
```
This refers to the views index.php file.  
Now You can access by browser `8765/intern`  
### View
If you want to write contents here, 
make view file. In this case,
```
src/Template/Intern/index.ctp
```
is needed. So make it. Then write this inside  
`<h1><center>hello</center></h1>`  
If it worked, you will see:  
![h1HelloPrinted](img/intern_hello.png)
You could access to `/intern` and 
view the view file here.  

### Make Table
To access Database, we need to make Model file.  
First, Make the Database and Table inside.  
Create table by SQL, like:  
```
CREATE TABLE interns (
   id INT AUTO_INCREMENT PRIMARY KEY,
   email VARCHAR(255) NOT NULL,
);
```
This is simply id and email data.
#### Insert Table
Insert some records to the table:  
```
INSERT INTO interns (email) VALUES
('cakephp@example.com');
```
### Model
This is `MVC` frame work. we made:  
VIEW, CONTROLLER, M left.  
This is MODEL. So let's make it.  
Write the table connection in Model here:  
```
Model/Table/
```
Make InternsTable.php  
Careful! Everything are pural.  
Inside here:  
```
namespace App\Model\Table;

use Cake\ORM\Table;

class InternsTable extends Table {
}
```
and check this. In InternsController, write:  
```
debug($this->Interns);
```
You can see the database , the intern table.  

![alt](img/intern_table.png)
## Passing data
That was happening in Controller.  
To see in View, you need to pass the data.  
Write this in InternsController::index()
```
$this->loadComponent('Paginator');
$interns = $this->Paginator->paginate(
    $this->Interns->find()
    );

$this->set(compact('interns'));
debug($this->Interns);

```
Cushioning `paginator`,
`$this->loadComponent('Paginator');`  
`$this->Paginator->paginate()`  
Enables to confirm the DB simply.  

![alt](img/intern_pass_data.png)

## Show the table by for each
In index.ctp,
```
<?php foreach($interns->toArray() as $obj): ?>
<h1> <?= $obj->id?></h1>
<h1> <?= $obj->name?></h1>
<h1> <?= $obj->email?></h1>
<h1> <?= $obj->location?></h1>
<?php endforeach; ?>
```
Then you can see all the email data of 
mail list 
![alt](img/intern_email_list.png)

### Add more records by insert
Then add more records inside.  
Add column desc  
cake, vue, rails, jq, react, laravel,  
sato, suzuki, tanaka, Tom, Bob, Emma,  
Ykhm, Tko, Tokyo, Kyot, US, UK, USSR,  

Kubo, Seki, Mori,  
cobol,Java, Excel,  
Fuksm, Oita, Ueno,  

like this:  
```
insert into interns
(email,name,text,location)
values ('sh@gmail.com', 'Name', 'Desc', 'Tokyo')
```
## Bake
We made table inside the database, 
Controller, View, Model files.  
But these operations are available by `bake` command.  

### migration 
`bin/cake migration...` `bin/cake migrations migarte`
can make a table, 
insert column, del column, and del tabel,
This command makes migration file in config/Migration/
### make a table
```
bin/cake bake migration CreateTableName  
name:string description:text created modified  
```
Let's make a sample named `products`

Here the result:  
![alt](img/createProducts.png)

Then the created file in `config/Migrations/` here:  
```
<?php
use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
        ]);
        $table->addColumn('des', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
        ]);
        $table->addColumn('text', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => false,
        ]);
        $table->create();
    }
}
```
That simple bake command made this file!!  

Then you run 
```
bin/cake migration migrate
```
NO BAKE IN MIGRATE  
And all the files in `config/Migrations/` run.  
If No errs, the table will be created.  

![alt](img/migrated.png)
![alt](img/migrated_2.png)

It also make a migrate file:  

```
<?php
use Migrations\AbstractMigration;

class Migrate extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
    }
}
```
See the table in MySQL:  

![alt](img/products_desc.png)

`id` auto++ column was made automatically.  

### Del a table
bin/cake bake migration DropTableName  
### Add a column
bin/cake bake migration AddPriceToTableName price:decimal
### Delete a column
bin/cake bake migration RemovePriceFromTableName price
## Bake Cmd
`bin/cake bake...` cmd can make proper 
[controller, model, ctps(index,add,edit,view),]  


https://qiita.com/ozawan/items/8144e02ca70519f3dcaf


## Link to the Men clicked
That index.ctp was a list of all intern students,  
so make a link to `detail.ctp` page,  
and make the page.  

## link CSS
Write this in index.ctp
```
$this->Html->css('interns');
```


## todo
### top

Then make top page, and inserting calc, 
and deleting calc by db

![alt](img/intern_top.jpeg)

