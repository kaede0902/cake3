<?php
//src/Model/Table/PeopleTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class PeopleTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('People');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }
}


