<?php
namespace App\Models;
use CodeIgniter\Model;

Class FuncionarioModel extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id_funcionario';
    protected $allowedFields = [
        'id_funcionario',
        'nome',
        'cpf',
        'rg',
        'cargo',
        'salario',
        'dia_de_pagamento',
        'data_de_contratacao',
        'data_de_nascimento',
        'telefone',
        'endereco',
    ];

    protected $useTimeStamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>