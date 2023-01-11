<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_produto' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'autoincrement' => true
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],

            'descricao' => [
                'type' => 'TEXT',
            ],

            'quantidade' => [
                'type' => 'int',
            ],

            'quantidade_minima' => [
                'type' => 'int',
            ],

            'valor_de_compra' => [
                'type' => 'int',
            ],

            'valor_de_venda' => [
                'type' => 'int',
            ],

            'valor_de_venda' => [
                'type' => 'int',
            ],

            'margem_de_lucro' => [
                'type' => 'int',
            ],

            'validade' => [
                'type' => 'DATE',
            ],



            'created_at' => [
                'type' => 'DATETIME',
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_produto', true);
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
