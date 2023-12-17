<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HealthyFood extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "food" => [
                "type" => "VARCHAR",
                "constraint" => 225,
                "notNull" => true,
            ],
            "serving" => [
                "type" => "VARCHAR",
                "constraint" => 225,
                "notNull" => true,
            ],
            "calories" => [
                "type" => "INT",
                "constraint" => 11,
                "notNull" => true,
            ],
            "price" => [
                "type" => "INT",
                "constraint" => 11,
                "notNull" => true,
            ]
        ]);

        $this->forge->addPrimaryKey("food");
        $this->forge->createTable('healthy_food', true);
    }

    public function down()
    {
        //
    }
}
