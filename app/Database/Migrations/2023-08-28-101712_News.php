<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                // 'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
                'default'    => 'No Title',
            ],
            'slug' => [
                'type'       => 'TEXT',
                'constraint' => '128',
                'unique'     => true,
            ],
            'body' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'datetime',
                'default' => date('Y-m-d H:i:s'),
            ],
            'updated_at' => [
                'type' => 'datetime',
                'default' => date('Y-m-d H:i:s'),
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['publish', 'pending', 'scraped'],
                'default'    => 'pending',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('News');
    }

    public function down()
    {
        $this->forge->dropTable('News', true, true);
    }
}
