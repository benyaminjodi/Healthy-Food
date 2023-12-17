<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id_order" => [
                "type" => "INT",
                "constraint" => 11,
                "auto_increment" => true,
                "notNull" => true,
            ],
            "email_user" => [
                "type" => "VARCHAR",
                "constraint" => 225,
            ],
            "total_harga" => [
                "type" => "INT",
                "constraint" => 11,
            ],
            "point" => [
                "type" => "INT",
                "constraint" => 11,
            ],
            "created_at" => [
                "type" => "Timestamp",
                "null" => true,
            ],
        ]);

        $this->forge->addPrimaryKey("id_order");
        $this->forge->createTable('orders', true);
    }

    public function down()
    {
        //
    }
}
