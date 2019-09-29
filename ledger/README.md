# ledger app

## UI, DB structure
https://miro.com/welcomeonboard/4xn6z63A4oGh00U02gFSqcDbqlIJdyEF3xp5ILzrjFVuFUWZkRt7PMBYu0enXYlr

## DB
db: fesa, table: ledge, 
```cakephp
bin/cake bake migration createLedgers \
customer_name:string[64] \
customer_adress:text \
customer_tel1:string[64] \
customer_tel2:string[64] \
staff_id:int \
work_category:int \
content:text \
created:date \
reserved:date \
modified:date \
```
```cakephp
bin/cake migrations migrate 
bin/cake bake all ledgers
```
* I bake wrong table name, `ledges`
I have to make sh file to delete all.
### to delelte
```
src/
    Controller/
        HogesController.php
    Model/
        Entity/
            Hoge.php
        Table/
           HogesTable.php
    Template/
        Hoges/
            add.ctp
            edit.ctp
            index.ctp
            view.ctp

```
```sh
# if you baked wrong table name
# $1 to uppercase
rm -ri Model/Entity/Hoge.php
....
```
* this column `staff_id` make
```php
$this->paginate = [
    'contain' => ['Staffs']
];
```
in Ctrllr, but this need to delete.  
Do same in add,edit,

I can print ledger now.
basic crud is done.


### to do
restrict staff to 0 - 3 select.

0 to Statham  
1 to Jason bourne  
2 to Yamada  

vi template/ledgers/add.ctp


