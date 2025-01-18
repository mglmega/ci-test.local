<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Football'],
            ['name' => 'Basketball'],
            ['name' => 'Table tennis']
        ];

        $this->db->table('category')->insertBatch($data);
    }
}
