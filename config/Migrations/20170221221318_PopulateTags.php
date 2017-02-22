<?php
use Migrations\AbstractMigration;

class PopulateTags extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $tags = [
            [
                'name' => 'CakePHP'
            ],
            [
                'name' => 'Framework'
            ],
            [
                'name' => 'PHP'
            ]
        ];
        $this->insert('tags', $tags);
        
        $users_tags = [
            [
                'user_id' => 1,
                'tag_id' => 1
            ],
            [
                'user_id' => 1,
                'tag_id' => 2
            ]
        ];
        $this->insert('users_tags', $users_tags);
    }
    
    public function down()
    {
        $this->execute('DELETE FROM users_tags');
        $this->execute("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'users_tags'");

        $this->execute('DELETE FROM tags');
        $this->execute("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'tags'");
    }
}
