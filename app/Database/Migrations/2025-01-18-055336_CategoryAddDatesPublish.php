<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class CategoryAddDatesPublish extends Migration
{
    public function up()
    {
        $fields = [
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null' => false,
                'default' => new RawSql('CURRENT_TIMESTAMP')
            ],
            'created_user' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => false,
                'default' => 1
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'updated_user' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'TIMESTAMP',
                'null' => true,
            ],
            'deleted_user' => [
                'type' => 'INT',
                'unsigned' => true,
                'null' => true,
            ],
        ];

        $this->forge->addColumn('category', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('category', 'created_at,created_user,updated_at,updated_user,deleted_at,deleted_user');
    }
}
