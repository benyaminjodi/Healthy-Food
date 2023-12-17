<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "auto_increment" => true,
                "notNull" => true,
            ],
            "id_order" => [
                "type" => "INT",
                "constraint" => 11,
            ],
            "food_name" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "qty" => [
                "type" => "INT",
                "constraint" => 11,
            ],
            "price" => [
                "type" => "INT",
                "constraint" => 11,
            ],
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable('order_details', true);
    }

    public function down()
    {
        //
    }
}
