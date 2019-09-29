# ledger app

## UI, DB structure
https://miro.com/welcomeonboard/4xn6z63A4oGh00U02gFSqcDbqlIJdyEF3xp5ILzrjFVuFUWZkRt7PMBYu0enXYlr

## DB
db: fesa, table: ledge, 
```cakephp
bin/cake bake migration createLedges \
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
# $1 to uppercase
rm -ri Model/Entity/Hoge.php
```
