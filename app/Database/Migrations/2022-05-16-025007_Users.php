<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;


class Users extends Migration
{
    private $fields = [
        'id'          => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true
        ],
        'title'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
            'unique'         => true,
        ],
        'author'      => [
            'type'           =>'VARCHAR',
            'constraint'     => 100,
            'default'        => 'King of Town',
        ],
        'description' => [
            'type'           => 'TEXT',
            'null'           => true,
        ],
        'status'      => [
            'type'           => 'ENUM',
            'constraint'     => ['publish', 'pending', 'draft'],
            'default'        => 'pending',
        ],
    ];

    public function up()
    {
       $forge->addField(''); 
    }

    public function down()
    {
        //
    }
}
