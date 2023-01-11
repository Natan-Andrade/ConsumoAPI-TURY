<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_cliente' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'autoincrement' => true
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],

            'data_de_nascimento' => [
                'type' => 'DATE',
            ],

            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],

            'endereco' => [
                'type' => 'DOUBLE',
            ],

            'limite_de_credito' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],



            'created_at' => [
                'type' => 'DATETIME',
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_cliente', true);
        $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
