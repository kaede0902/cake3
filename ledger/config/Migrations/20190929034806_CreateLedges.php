<?php
use Migrations\AbstractMigration;

class CreateLedges extends AbstractMigration
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
        $table = $this->table('ledges');
        $table->addColumn('customer_name', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('customer_adress', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('customer_tel1', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('customer_tel2', 'string', [
            'default' => null,
            'limit' => 64,
            'null' => false,
        ]);
        $table->addColumn('staff_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('work_category', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('reserved', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
