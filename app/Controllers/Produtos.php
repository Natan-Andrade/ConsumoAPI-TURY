<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdutoModel;
use Exception;

class Produtos extends Controller
{
    private $produto_model;
    function __construct()
    {
        $this->produto_model = new ProdutoModel();
    }

    public function index()
    {
        $produtos = $this->produto_model->findAll();
        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('produtos/index', $data);
        echo View('templates/footer');
    }

    public function visualizar($id_produto)
    {
        $produtos = $this->produto_model
            ->where('id_produto', $id_produto)
            ->first();

        $data['produtos'] = $produtos;

        echo View('templates/header');
        echo View('produtos/visualizar', $data);
        echo View('templates/footer');
    }
    
    public function novo()
    {   
        echo View('templates/header');
        echo View('produtos/novo');
        echo View('templates/footer');
    }

    public function editar($id_produto)
    {   
        $produto = $this->produto_model
            ->where('id_produto', $id_produto)
            ->first();

        $data['produtos'] = $produto;

        echo View('templates/header');
        echo View('produtos/editar', $data);
        echo View('templates/footer');
    }

    public function deletar()
    {
        $id_produto = $this->request->getVar('id_produto');

        $this->produto_model
            ->where('id_produto', $id_produto)
            ->delete();

        $session = session();
        $session->setFlashData('alert','success_delete');

        return redirect()->to('/produtos');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        if(isset($dados['id_produto'])):
            $this->produto_model
                ->where('id_produto', $dados['id_produto'])
                ->set($dados)
                ->update();

                $session = session();
                $session->setFlashData('alert','success_edit');

            return redirect()->to('/produtos');
        endif;


        $this->produto_model->insert($dados);

        $session = session();
        $session->setFlashData('alert','success_create');

        return redirect()->to('/produtos');
    }
   
}
