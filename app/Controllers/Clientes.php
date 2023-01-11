<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ClienteModel;

class Clientes extends Controller
{
    private $cliente_model;
    function __construct()
    {
        $this->cliente_model = new ClienteModel();
    }

    public function index()
    {
        $clientes = $this->cliente_model->findAll();
        $data['clientes'] = $clientes;
        
        echo View('templates/header');
        echo View('clientes/index', $data);
        echo View('templates/footer');
    }

    public function novo()
    {   
        echo View('templates/header');
        echo View('clientes/novo');
        echo View('templates/footer');
    }

    public function visualizar($id_cliente)
    {
        $cliente = $this->cliente_model
            ->where('id_cliente', $id_cliente)
            ->first();

        $data['clientes'] = $cliente;

        echo View('templates/header');
        echo View('clientes/visualizar', $data);
        echo View('templates/footer');
    }

    public function editar($id_cliente)
    {
        $cliente = $this->cliente_model
            ->where('id_cliente', $id_cliente)
            ->first();

        $data['clientes'] = $cliente;

        echo View('templates/header');
        echo View('clientes/editar',$data);
        echo View('templates/footer');
    }

    public function deletar()
    {
        $id_cliente = $this->request->getVar('id_cliente');
         $this->cliente_model
            ->where('id_cliente', $id_cliente)
            ->delete();

            $session = session();
            $session->setFlashData('alert','success_delete');

        return redirect()->to('/clientes');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        if(isset($dados['id_cliente'])):

            $this->cliente_model
                ->where('id_cliente', $dados['id_cliente'])
                ->set($dados)
                ->update();

            $session = session();
            $session->setFlashData('alert','success_edit');

            return redirect()->to('/clientes');
        endif;

        $this->cliente_model->insert($dados);

        $session = session();
        $session->setFlashData('alert','success_create');

        return redirect()->to('/clientes');
    }
}
