<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Enviarpedido extends BaseController
{
    public function index()
    {
        echo View('templates/header');
        echo View('api/enviarpedido');
        echo View('templates/footer');
    }

    public function inserir()
    {
        $dados = $this->request->getVar();

        header('Content-Type: application/json');
        header('Character-Encoding: utf-8');

        $url = 'http://192.168.15.37/portaljaia/api/enviapedido.php';

        $ch = curl_init($url);
        $data = array(
            "chavecliente" => ''.$dados['chavecliente'].'',
            "itens_pedido" => [
                [
                    "codbar" => ''.$dados['codbar'].'',
                    "quantidade" => ''.$dados['quantidade'].''
                ],
            ]
        );
        $corpo = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $corpo);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = curl_exec($ch);

        curl_close($ch);

        $retorno = json_decode($resultado);

        if(isset($retorno->retorno[0]->rejectedkey)):

            $data = [
                'resultado' => $retorno->retorno[0]->rejectedkey
            ];

            $session = session();
            $session->setFlashData('alert','rejectedkey');

            echo View('templates/header');
            echo View('api/enviarpedido', $data);
            echo View('templates/footer');
        endif;

        if(isset($retorno->retorno[0]->rejected)):

            $data = [
                'resultado' => $retorno->retorno[0]->rejected
            ];

            $session = session();
            $session->setFlashData('alert','rejected');

            echo View('templates/header');
            echo View('api/enviarpedido', $data);
            echo View('templates/footer');
        endif;

        if(isset($retorno->retorno[0]->success)):

            $data = [
                'resultado' => $retorno->retorno[0]->success,
                'codigo' => $retorno->retorno[0]->numped
            ];

            $session = session();
            $session->setFlashData('alert','success');

            echo View('templates/header');
            echo View('api/enviarpedido', $data);
            echo View('templates/footer');
        endif;
    }
}