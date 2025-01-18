<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'blog_id' => 1,
                'username' => 'JohnDoe',
                'comment' => 'This is a great blog post!',
            ],
            [
                'blog_id' => 2,
                'username' => 'Naruto',
                'comment' => 'Naruto commented This is a great blog post!',
            ],
            [
                'blog_id' => 3,
                'username' => 'Sasuke',
                'comment' => 'Sasuke commented This is a great blog post!',
            ],
            [
                'blog_id' => 4,
                'username' => 'Itachi',
                'comment' => 'Itachi commented This is a great blog post!',
            ],
            [
                'blog_id' => 5,
                'username' => 'Kakashi',
                'comment' => 'Kakashi commented This is a great blog post!',
            ],
            [
                'blog_id' => 6,
                'username' => 'Miga',
                'comment' => 'Miga commented This is a great blog post!',
            ],
            [
                'blog_id' => 2,
                'username' => 'WhoIsThat',
                'comment' => 'WhoIsThat commented This is a great blog post!',
            ],
            [
                'blog_id' => 3,
                'username' => 'Guest',
                'comment' => 'Guest commented This is a great blog post!',
            ],
        ];

        $this->db->table('comment')->insertBatch($data);
    }
}
