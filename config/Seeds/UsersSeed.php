<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'email' => 'admins@gmail.com',
            'name' => 'admin',
            'password' => '$2y$10$bH5ElPCf7beZiBTEkwwwquoP4JryIKN81FZbVxApmzgwy/uAZSpg6',
            'role' => 'admin',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
