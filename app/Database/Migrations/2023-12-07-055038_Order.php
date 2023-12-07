<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'userId' => [
                'type'       => 'INT',
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ],
            //food id dengan type array of integer
            'foodId' => [
                'type' => 'INT',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('userId', 'users', 'id');
        $this->forge->addForeignKey('foodId', 'foods', 'id');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
