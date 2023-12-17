<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 225,
                "notNull" => true,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 225,
                "notNull" => true,
                "unique" => true,
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 225,
                "notNull" => true,
            ],
            "poin" => [
                "type" => "INT",
                "constraint" => 11,
                "notNull" => false
            ]
        ]);

        // height VARCHAR(255),
        // weight VARCHAR(255),
        // age INT,

        $this->forge->addPrimaryKey("email");
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        //
    }
}
