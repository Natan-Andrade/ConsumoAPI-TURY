<?php
namespace App\Models;
use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id_produto';
    protected $allowedFields = [
        'id_produto',
        'nome',
        'descricao',
        'quantidade',
        'quantidade_minima',
        'valor_de_compra',
        'valor_de_venda',
        'valor_de_venda',
        'margem_de_lucro',
        'validade',
    ];

    protected $useTimeStamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}
