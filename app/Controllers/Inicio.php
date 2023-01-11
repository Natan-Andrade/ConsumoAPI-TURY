<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Models\ProdutoModel;
use App\Models\FuncionarioModel;

use CodeIgniter\Controller;

class Inicio extends Controller
{
    private $cliente_model;
    private $produto_model;
    private $funcionario_model;

    function __construct()
    {
        $this->cliente_model = new ClienteModel();
        $this->produto_model = new ProdutoModel();
        $this->funcionario_model = new FuncionarioModel();
    }

    public function index()
    {
        $total_clientes = count(
            $this->cliente_model->findAll()
        );

        $total_produtos = count(
            $this->produto_model->findAll()
        );

        $total_funcionarios = count(
            $this->funcionario_model->findAll()
        );

        $data['total_clientes'] = $total_clientes;
        $data['total_produtos'] = $total_produtos;
        $data['total_funcionarios'] = $total_funcionarios;

        echo View('templates/header');
        echo View('inicio/index', $data);
        echo View('templates/footer');
    }
}
