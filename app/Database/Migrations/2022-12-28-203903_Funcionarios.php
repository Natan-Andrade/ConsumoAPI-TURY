<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Funcionarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_funcionario' => [
                'type' => 'INT',
                'constraint' => 9,
                'usigned' => true,
                'autoincrement' => true
            ],

            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],

            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],

            'rg' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],

            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],

            'salario' => [
                'type' => 'DOUBLE',
            ],

            'dia_de_pagamento' => [
                'type' => 'int',
            ],

            'data_de_contratacao' => [
                'type' => 'DATE',
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



            'created_at' => [
                'type' => 'DATETIME',
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('id_funcionario', true);
        $this->forge->createTable('funcionarios');
    }

    public function down()
    {
        $this->forge->dropTable('funcionarios');
    }
}
