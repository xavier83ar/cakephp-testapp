<?php
use Migrations\AbstractMigration;

class PopulateUsers extends AbstractMigration
{
    public function up()
    {
        $users = [
            [
                'name' => 'Jhon Doe',
                'username' => 'jhondoe',
                'password' => '$2y$10$7nTqJRH4XKQHdTwfteses.ylYoKupmyA.0zTb9DIfpCFznKyeaoBy', // 123123
            ],
            [
                'name' => 'Paul Test',
                'username' => 'paultest',
                'password' => '$2y$10$7nTqJRH4XKQHdTwfteses.ylYoKupmyA.0zTb9DIfpCFznKyeaoBy', // 123123
            ],
        ];
        
        $this->insert('users', $users);
    }
    
    public function down()
    {
        $this->execute('DELETE FROM users');
        $this->execute("UPDATE sqlite_sequence SET seq = 0 WHERE name = 'users'");
    }
}
