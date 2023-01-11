<?php

namespace App\Controllers;
use App\Models\loginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    private $login_model;

    function __construct()
    {
        $this->login_model = new loginModel();
    }


    public function index()
    {
        echo View('login/index');
    }

    public function autenticar()
    {
        $dados = $this->request->getVar();

        $usuario = $this->login_model
            ->where('usuario', $dados['usuario'])
            ->where('senha', md5($dados['senha']))
            ->first();

        $session = session();

        if(!empty($usuario)):
            
            $session->set('primeiro_nome', $usuario['primeiro_nome']);
            $session->setFlashdata('alert', 'success_login');

            return redirect()->to('/inicio');

        endif;

        $session->setFlashdata('alert', 'error_login');

        return redirect()->to('/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('/login');

    }

    public function trocarsenha()
    {
        echo view('templates/header');
        echo view('login/trocarsenha');
        echo view('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();
        
        $usuario = $this->login_model
            ->where('id_login', 1)
            ->first();

        $session = session();

        if(md5($dados['senha_atual']) == $usuario['senha']):
            if($dados['nova_senha'] == $dados['confirmar_nova_senha']):

                $this->login_model
                    ->where('id_login', 1)
                    ->set('senha', md5($dados['nova_senha']))
                    ->update();

                $session->setFlashdata('alert', 'success_trocar_senha');

                return redirect()->to('/login/trocarsenha');
            endif; 
        endif;    

        $session->setFlashdata('alert', 'error_trocar_senha');
        return redirect()->to('/login/trocarsenha');
    }
}
