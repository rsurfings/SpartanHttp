<?php
namespace SpartanHttp;
use GuzzleHttp\Client;

class Client
{

    public $service;

    private $url = 'http://ws.inovacao.ws.erpflex.com.br/queue';

    /**
     *
     * @param unknown $service            
     */
    public function __construct ($service)
    {
        $this->service = $service;
    }

    /**
     *
     * @param array $message            
     * @return unknown[]
     */
    public function get ($message = [])
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

    /**
     *
     * @param array $message            
     * @return unknown[]
     */
    public function post ($message = [])
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