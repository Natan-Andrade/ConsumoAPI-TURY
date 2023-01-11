<?php
namespace App\Models;
use CodeIgniter\Model;

Class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'id_cliente', 
        'nome',
        'data_de_nascimento',
        'telefone',
        'endereco',
        'limite_de_credito',
    ];

    protected $useTimeStamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

}

?>