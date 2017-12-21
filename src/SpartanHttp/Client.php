<?php
namespace SpartanHttp;
use GuzzleHttp\Client;

class Client
{

    public $service;

    private $url = 'http://ws.inovacao.ws.erpflex.com.br';

    public function __construct ($service)
    {
        $this->service = $service;
    }

    public function get ()
    {
        $client = new Client();
        $response = $client->request('GET', $this->url, 
                [
                        'json' => json_encode($message)
                ]);
        
        $code = $response->getStatusCode(); // 200
        $reason = $response->getReasonPhrase(); // OK
        
        return array(
                'code' => $code,
                'reason' => $reason,
                'response' => $response
        );
    }

    public function post ()
    {
        $client = new Client();
        $response = $client->request('POST', $this->url, 
                [
                        'json' => json_encode($message)
                ]);
        
        $code = $response->getStatusCode(); // 200
        $reason = $response->getReasonPhrase(); // OK
        
        return array(
                'code' => $code,
                'reason' => $reason,
                'response' => $response
        );
    }
}