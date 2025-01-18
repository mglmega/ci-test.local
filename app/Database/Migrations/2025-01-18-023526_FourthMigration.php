<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FourthMigration extends Migration
{
    public function up()
    {
        # add category_id field to blog table
        $fields = [
            'category_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
                'after' => 'id'
            ],
        ];
        $this->forge->addColumn('blog', $fields);

        # add foreign key to blog table
        $this->forge->addForeignKey('category_id', 'category', 'id', 'CASCADE', 'CASCADE', 'category_id');
        $this->forge->processIndexes('blog');
    }

    public function down()
    {
        $this->forge->dropForeignKey('blog', 'category_id');
        $this->forge->dropColumn('blog', 'category_id');
    }
}
