<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Exception;

class Consultasaldo extends BaseController
{
    public function index()
    {
        $client = service('curlrequest');
        try{
            $response = $client->request('GET','http://turyportal.dyndns.info:888/portaljaia_hml/api/consultasaldo.php');
            $json = json_decode($response->getBody());
            $produtos = $json->produtos;

            $data['produtos'] = $produtos;

            echo View('templates/header');
            echo View('api/index', $data);
            echo View('templates/footer');
        }

        catch(Exception $e){
            echo $e->getMessage();
        }
    }

}
