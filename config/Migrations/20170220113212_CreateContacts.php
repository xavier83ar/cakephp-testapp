<?php
use Migrations\AbstractMigration;

class CreateContacts extends AbstractMigration
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
        $table = $this->table('contacts');
        $table->addColumn('name', 'string');
        $table->addColumn('user_id', 'integer', ['null' => false]);
        $table->create();
    }
}
