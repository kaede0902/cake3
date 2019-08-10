# re cake php
## why
find out the need of crud basic from ceress hackerson  
I made new rep `cake3` and this redo article.  
## start
### Access index.ctp
from executing 
```
bin/cake server
```
You can see status in `http://localhost:8765/`  
In `src/Controller/`, make anything like:  
`InternController.php`  
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
You can access by browser `8765/intern`  
In this cake,  
```
src/Template/Intern/index.ctp
```
is needed. So make it. Try this inside  
`<h1><center>hello</center></h1>`  
If it worked, you will see:  
![alt](intern_hello.png)

### select from db
In Intern/index.ctp, show data from db.
Create table by SQL, like:  
```
CREATE TABLE interns (
   id INT AUTO_INCREMENT PRIMARY KEY,
   email VARCHAR(255) NOT NULL,
);
```
Insert some records to the table:  
```
INSERT INTO interns (email) VALUES
('cakephp@example.com');
```
Then write the table connection in Model:  
Make InternsTable. Everything are pural.  
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
returns data structure:  
![alt](intern_table.png)

## todo
### top
Then make top page, and inserting calc, 
and deleting calc by db

