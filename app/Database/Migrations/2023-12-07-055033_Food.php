<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Food extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ],
            'imgpath' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ],
            'price' => [
                'type' => 'INT',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('foods');
    }

    public function down()
    {
        $this->forge->dropTable('foods');
    }
}
