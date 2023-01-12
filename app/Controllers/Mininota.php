<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Mininota extends BaseController
{
    public function index()
    {
        echo View('templates/header');
        echo View('api/mininota');
        echo View('templates/footer');
    }

    public function inserir()
    {

        $dados = $this->request->getVar();
        
        header('Content-Type: application/json');
        header('Character-Encoding: utf-8');

        $url = 'http://turyportal.dyndns.info:888/portaljaia_hml/api/enviomininota.php';

        $ch = curl_init($url);

        $data = array(
            'chavecliente' => ''.$dados['chavecliente'].'',
            'numped' => ''.$dados['numped'].'',
            'mininota' => ''.$dados['mininota'].'',
        );
        $corpo = json_encode($data);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $corpo);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resultado = curl_exec($ch);
        $retorno = json_decode($resultado);

        curl_close($ch);

        if(isset($retorno->retorno[0]->success)):

            $session = session();
            $session->setFlashData('alert','success');

            $data = [
                'resultado' => $retorno->retorno[0]->success
            ];

            echo View('templates/header');
            echo View('api/mininota', $data);
            echo View('templates/footer');
        endif;

        if(isset($retorno->retorno[0]->rejectedkey)):

            $session = session();
            $session->setFlashData('alert','rejectedkey');

            $data = [
                'resultado' => $retorno->retorno[0]->rejectedkey
            ];

            echo View('templates/header');
            echo View('api/mininota', $data);
            echo View('templates/footer');
        endif;

        if(isset($retorno->retorno[0]->rejected)):

            $session = session();
            $session->setFlashData('alert','rejected');

            $data = [
                'resultado' => $retorno->retorno[0]->rejected,
                'motivo' => $retorno->retorno[0]->motivo
            ];

            echo View('templates/header');
            echo View('api/mininota', $data);
            echo View('templates/footer');
        endif;

    }
}