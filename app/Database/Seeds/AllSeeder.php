<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        # disable foreignkey check
        $this->db->disableForeignKeyChecks();

        # trancate all tables
        $this->db->table('comment')->truncate();
        $this->db->table('category')->truncate();
        $this->db->table('blog')->truncate();

        # seed tables
        $this->call('CategorySeeder');
        $this->call('BlogSeeder');
        $this->call('CommentSeeder');

        # enable foreignkey check
        $this->db->enableForeignKeyChecks();
    }
}
