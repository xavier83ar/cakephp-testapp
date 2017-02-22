<?php
use Migrations\AbstractMigration;

class PopulateContacts extends AbstractMigration
{
    
    public function up()
    {
        $contacts = [
            [
                'name' => 'jhon@mail1.com',
                'user_id' => 1
            ],
            [
                'name' => 'jhon@mail2.com',
                'user_id' => 1
            ],
            [
                'name' => 'jhon@mail3.com',
                'user_id' => 1
            ],
            [
                'name' => 'test@mail1.com',
                'user_id' => 2
            ],
            [
                'name' => 'test@mail2.com',
                'user_id' => 2
            ]
        ];
        
        $this->insert('contacts', $contacts);
    }
    
    public function down()
    {
        $this->execute('DELETE FROM contacts');
        $this->execute("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'contacts'");
    }
}
