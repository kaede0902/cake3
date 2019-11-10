<?php
use Migrations\AbstractMigration;

class AddDoneToLedgers extends AbstractMigration
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
        $table = $this->table('ledgers');
        $table->addColumn('done', 'boolean', [
            'default' => null,
            'limit' => 1,
            'null' => true,
        ]);
        $table->update();
    }
}
