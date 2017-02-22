<?php
use Migrations\AbstractMigration;

class CreateUsersTags extends AbstractMigration
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
        $table = $this->table('users_tags');
        $table->addColumn('user_id', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('tag_id', 'integer', [
            'null' => false,
        ]);
        $table->create();
    }
}
