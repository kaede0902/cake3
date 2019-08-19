<?php
use Migrations\AbstractMigration;

class CreateInterns extends AbstractMigration
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
        $table = $this->table('interns');
        $table->addColumn('name', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('des', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('location', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('univ', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
