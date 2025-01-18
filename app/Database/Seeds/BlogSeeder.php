<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id' => 1,
                'title' => 'First Blog Post',
                'short_description' => 'This is the first blog post.',
            ],
            [
                'category_id' => 2,
                'title' => 'Second Blog Post',
                'short_description' => 'This is the Second blog post.',
            ],
            [
                'category_id' => 3,
                'title' => 'Third Blog Post',
                'short_description' => 'This is the Third blog post.',
            ],
            [
                'category_id' => 4,
                'title' => 'Fourth Blog Post',
                'short_description' => 'This is the Fourth blog post.',
            ],
            [
                'category_id' => 2,
                'title' => 'Fifth Blog Post',
                'short_description' => 'This is the Fifth blog post.',
            ],
            [
                'category_id' => 4,
                'title' => 'Sixth Blog Post',
                'short_description' => 'This is the Sixth blog post.',
            ],
        ];

        $this->db->table('blog')->insertBatch($data);
    }
}
